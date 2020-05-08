<?php  

   // Class Auth digunakan pada saat melakukan login dan registrasi user baru 
    
   class Auth 
   { 
     private $db; //Menyimpan Koneksi database 
     private $error; //Menyimpan Error Message 

     // Contructor untuk class Auth, membutuhkan satu parameter yaitu koneksi ke database  
     function __construct($db_conn) 
     { 
       $this->db = $db_conn; 
       session_start(); 
     } 

     // fungsi untuk Registrasi User baru 
     public function register($nama, $email, $password) 
     { 
       try 
       { 
         // membuat hash dari password yang dimasukkan 
         $hashPasswd = password_hash($password, PASSWORD_DEFAULT); 

         //Masukkan user baru ke database 
         $stmt = $this->db->prepare("INSERT INTO tbAuth(nama, email, password) VALUES(:nama, :email, :pass)"); 
         $stmt->bindParam(":nama", $nama); 
         $stmt->bindParam(":email", $email); 
         $stmt->bindParam(":pass", $hashPasswd); 
         $stmt->execute(); 

         return true; 

       }catch(PDOException $e){ 

         // apabila terjadi error 

         if($e->errorInfo[0] == 23000){ 

           //errorInfor[0] berisi informasi error tentang query sql yg baru dijalankan 

           //23000 adalah kode error ketika ada data yg sama pada kolom yg di set unique 

           $this->error = "Email ini sudah digunakan!, coba masukkan email yang lain. atau apabila telah memiliki akun, silahkan melakukan login"; 
           return false; 

         }else{ 
           echo $e->getMessage(); 
           return false; 
         } 
       } 
     } 

    // fungsi login user 
     public function login($email, $password) 

     { 
       try 
       { 
         // mengambil data dari database 
         $stmt = $this->db->prepare("SELECT * FROM tbAuth WHERE email = :email"); 
         $stmt->bindParam(":email", $email); 
         $stmt->execute(); 
         $data = $stmt->fetch(); 

         // Jika jumlah baris > 0 
         if($stmt->rowCount() > 0){ 

           // jika password yang dimasukkan sesuai dengan yg ada di database 
           if(password_verify($password, $data['password'])){ 
             $_SESSION['user_session'] = $data['id']; 
             return true; 
           }else{ 
             $this->error = "Email atau Password yang anda masukkan Salah"; 
             return false; 
           } 

         }else{ 

           $this->error = "Email atau Password Salah"; 

           return false; 

         } 

       } catch (PDOException $e) { 

         echo $e->getMessage(); 

         return false; 

       } 

     } 

     // fungsi cek login user

     public function isLoggedIn(){ 

       // Apakah user_session sudah ada di session 
       if(isset($_SESSION['user_session'])) 
       { 
         return true; 
       } 
     } 

     // fungsi mengambil data user yang sudah login 
     public function getUser(){ 
       // Cek apakah sudah login 
       if(!$this->isLoggedIn()){ 
         return false; 
       } 

       try { 
         // mengambil data user dari database 
         $stmt = $this->db->prepare("SELECT * FROM tbAuth WHERE id = :id"); 
         $stmt->bindParam(":id", $_SESSION['user_session']); 
         $stmt->execute(); 
         return $stmt->fetch(); 
       } catch (PDOException $e) { 
         echo $e->getMessage(); 
         return false; 
       } 
     } 

      // fungsi Logout user  

     public function logout(){ 
       // Hapus session 
       session_destroy(); 
       // Hapus user_session 
       unset($_SESSION['user_session']); 
       return true; 
     } 

     // fungsi ambil error terakhir yg disimpan di variable error 
     public function getLastError(){ 
       return $this->error; 
     } 
   } 

 ?> 