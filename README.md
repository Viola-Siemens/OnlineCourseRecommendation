# README

1. 先运行builddatabase.php创建数据库，再执行init.php初始化数据，本项目的数据库用的是MAMP默认，servername = "localhost";
   username = "root";password = "root";dbname = "course";table名字为favouritecourse；使用自己其他数据库时注意修改。
   
   
   
2. index.html为首页，提交表单后自动运行course.php对数据库更新，采用平均值法更新score1，score2，score3，score4

   

3. 从1.html到4.html为课程目录，需要填充url和图片，关联超星相关的url以便给学生评分时作参考。

   

4. recommend.html是推荐页和后端连接，后端可以用从MySQL下载的数据。
