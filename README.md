# PHP_CRUD_OOP
hướng dẫn dựa trên bài viết của CodeOfaNinja.com 
link bài viết: https://www.codeofaninja.com/php-oop-crud-tutorial/
1. đầu tiên để chạy hãy vào XAMPP và khởi động cái công cụ.
   ![image](https://github.com/beckphoem/PHP_CRUD_OOP/assets/116699754/9ec929b3-b11f-448e-ac1e-bca4023d6fe2)
2. Vào trình duyệt đăng nhập vào localhost/phpmyadmin/ http://localhost/phpmyadmin/
   ![image](https://github.com/beckphoem/PHP_CRUD_OOP/assets/116699754/66646a0a-7165-484e-9b42-bae2dab25578)
3. Tiến hành tạo cơ sở dữ liệu bằng code sql sau:
      3.1 Đặt tên cơ sở dữ liệu là php_oop_crud_level_1:
      ![image](https://github.com/beckphoem/PHP_CRUD_OOP/assets/116699754/b937405a-89d1-4b8e-a50a-8d2db4b4c68d)
      3.2 vào tab sql và gõ mã sql vào rồi nhấn thực hiện:
         mã sql:
         -- Table structure for table `products`
            CREATE TABLE IF NOT EXISTS `products` (
              `id` int(11) NOT NULL AUTO_INCREMENT,
              `name` varchar(32) NOT NULL,
              `description` text NOT NULL,
              `price` int(11) NOT NULL,
              `category_id` int(11) NOT NULL,
              `created` datetime NOT NULL,
              `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
              PRIMARY KEY (`id`)
            ) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;
       ![image](https://github.com/beckphoem/PHP_CRUD_OOP/assets/116699754/8018d180-c406-4d95-9878-15a4263c6734)
