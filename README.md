# PHP_CRUD_OOP
hướng dẫn dựa trên bài viết của CodeOfaNinja.com 
link bài viết: https://www.codeofaninja.com/php-oop-crud-tutorial/
1. đầu tiên để chạy hãy vào XAMPP và khởi động cái công cụ.
   ![image](https://github.com/beckphoem/PHP_CRUD_OOP/assets/116699754/9ec929b3-b11f-448e-ac1e-bca4023d6fe2)
2. Vào trình duyệt đăng nhập vào localhost/phpmyadmin/ http://localhost/phpmyadmin/
   ![image](https://github.com/beckphoem/PHP_CRUD_OOP/assets/116699754/66646a0a-7165-484e-9b42-bae2dab25578)
3. Tiến hành tạo cơ sở dữ liệu bằng code sql (code chi tiết nằm trong đường link ở trên.):
      3.1 Đặt tên cơ sở dữ liệu là php_oop_crud_level_1:
      ![image](https://github.com/beckphoem/PHP_CRUD_OOP/assets/116699754/b937405a-89d1-4b8e-a50a-8d2db4b4c68d)
4.  Vào tab sql và gõ mã sql vào rồi nhấn thực hiện:
       ![image](https://github.com/beckphoem/PHP_CRUD_OOP/assets/116699754/8018d180-c406-4d95-9878-15a4263c6734)
5. Tải thử mục php-oop-crud-level-1 về lưu ở thư mục chứa xammp/htdocs trên máy tính
   ![image](https://github.com/beckphoem/PHP_CRUD_OOP/assets/116699754/ab4dfc52-3929-418a-8ca6-74a2d7c6cb01)
6. Nhấn vào link để chạy http://localhost/php-oop-crud-level-1/
    ![image](https://github.com/beckphoem/PHP_CRUD_OOP/assets/116699754/5fe11dca-5d8c-4e07-b7f1-41fe065e7a1a)
7. Tạo bảng history code sql:

8. Mã sql
  CREATE TABLE IF NOT EXISTS History (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_id INT NOT NULL,
    action VARCHAR(50) NOT NULL,
    timestamp DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);
<strong>Tạo bảng <code>History</code> trong cơ sở dữ liệu:</strong></li></ol><pre><div class="dark bg-gray-950 rounded-md border-[0.5px] border-token-border-medium"><div class="flex items-center relative text-token-text-secondary bg-token-main-surface-secondary px-4 py-2 text-xs font-sans justify-between rounded-t-md"><span>sql</span><div class="flex items-center"><span class="" data-state="closed"><button class="flex gap-1 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" class="icon-sm"><path fill="currentColor" fill-rule="evenodd" d="M7 5a3 3 0 0 1 3-3h9a3 3 0 0 1 3 3v9a3 3 0 0 1-3 3h-2v2a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3v-9a3 3 0 0 1 3-3h2zm2 2h5a3 3 0 0 1 3 3v5h2a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1h-9a1 1 0 0 0-1 1zM5 9a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h9a1 1 0 0 0 1-1v-9a1 1 0 0 0-1-1z" clip-rule="evenodd"></path></svg>Sao chép mã</button></span></div></div><div class="overflow-y-auto p-4 text-left undefined" dir="ltr"><code class="!whitespace-pre hljs language-sql"><span class="hljs-keyword">CREATE</span> <span class="hljs-keyword">TABLE</span> IF <span class="hljs-keyword">NOT</span> <span class="hljs-keyword">EXISTS</span> History (
    id <span class="hljs-type">INT</span> AUTO_INCREMENT <span class="hljs-keyword">PRIMARY</span> KEY,
    product_id <span class="hljs-type">INT</span> <span class="hljs-keyword">NOT</span> <span class="hljs-keyword">NULL</span>,
    action <span class="hljs-type">VARCHAR</span>(<span class="hljs-number">50</span>) <span class="hljs-keyword">NOT</span> <span class="hljs-keyword">NULL</span>,
    <span class="hljs-type">timestamp</span> DATETIME <span class="hljs-keyword">NOT</span> <span class="hljs-keyword">NULL</span> <span class="hljs-keyword">DEFAULT</span> <span class="hljs-built_in">CURRENT_TIMESTAMP</span>
);
</code></div></div></pre><ol start="2"><li><p><strong>
