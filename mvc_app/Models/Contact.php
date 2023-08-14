<?php
require_once(ROOT_PATH . 'Models/Db.php');

class Contact extends Db
{

   public function __construct($dbh = null)
   {
      parent::__construct($dbh);
      $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   }

   public function index()
   {
      $record = [];

      try{
         $sql = 'SELECT name, kana, tel, email, body, id FROM contacts';
         $table_rec = $this->dbh->query($sql);
         $table_rec->execute();
         $record = $table_rec->fetchall(PDO::FETCH_ASSOC);
         
         return $record;

        } catch (PDOException $e) {
         // 不具合があった場合トランザクションをロールバックして変更をなかったコトにする。
         $this->dbh->rollBack();
            //値がなかったら空の値を返す
         return $record;
         exit();
          
    }
   }
   

   public function complete(string $name, string $kana, string $email, string $tel, string $body)
    {
      try{
       $this->dbh->beginTransaction();
       $query = 'INSERT INTO contacts (name, kana, email, tel, body) VALUES (:name, :kana, :email, :tel, :body)';
       $stmt = $this->dbh->prepare($query);
       $stmt->bindParam(':name', $name, PDO::PARAM_STR);
       $stmt->bindParam(':kana', $kana, PDO::PARAM_STR);
       $stmt->bindParam(':email', $email, PDO::PARAM_STR);
       $stmt->bindParam(':tel', $tel, PDO::PARAM_STR);
       $stmt->bindParam(':body', $body, PDO::PARAM_STR);
       $stmt->execute();

       $lastId = $this->dbh->lastInsertId();

       $this->dbh->commit();
       return $lastId;
       }  catch (PDOException $e) {
      // 不具合があった場合トランザクションをロールバックして変更をなかったコトにする。
      $this->dbh->rollBack();
      echo "送信失敗: " . $e->getMessage() . "\n";
      exit();
       }

   }

   // 更新内容表示用のデータを取得して返却する
   public function getContact(string $id): stdClass{
      try{
          $query = 'SELECT * FROM contacts WHERE id = :id';
          $stmt = $this->dbh->prepare($query);
          $stmt->bindParam(':id', $id, PDO::PARAM_INT);
          $stmt->execute();
          return $stmt->fetch(PDO::FETCH_OBJ);
      } catch (PDOException $e) {
      echo "認証エラー: ". $e->getMessage(). "\n";
      exit();
      }
  }

  public function updateContact(string $id, string $name, string $kana, string $tel, string $email, string $body): bool
   {
    try{
      $this->dbh->beginTransaction();
      $query =  'UPDATE contacts SET name = :name, kana = :kana, tel = :tel, email = :email, body = :body';
      $query .= ' WHERE id = :id';
      $stmt = $this->dbh->prepare($query);
      $stmt->bindParam(':id', $id, PDO::PARAM_INT);
      $stmt->bindParam(':name', $name);
      $stmt->bindParam(':kana', $kana);
      $stmt->bindParam(':tel', $tel);
      $stmt->bindParam(':email', $email);
      $stmt->bindParam(':body', $body);

      $stmt->execute();
            // トランザクションを完了することでデータの書き込みを確定させる
      $this->dbh->commit();
      return true;

      } catch (PDOException $e) {
      // 不具合があった場合トランザクションをロールバックして変更をなかったコトにする。
      $this->dbh->rollBack();
      echo "登録失敗: " . $e->getMessage() . "\n";
      exit();
      }
   }

   public function deleteContact(string $id) {
      try{
          $this->dbh->beginTransaction();
          $query = 'DELETE FROM contacts WHERE id = :id';
          $stmt = $this->dbh->prepare($query);
          $stmt->bindParam(':id', $id, PDO::PARAM_INT);
          $stmt->execute();
          // トランザクションを完了することでデータの書き込みを確定させる
          $this->dbh->commit();
          return;
      } catch (PDOException $e) {
          // 不具合があった場合トランザクションをロールバックして変更をなかったコトにする。
          $this->dbh->rollBack();
          echo "削除失敗: " . $e->getMessage() . "\n";
          exit();
      }
  }

}
   ?>