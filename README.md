# Electronic Store Management System 

### Table of Contents:
1. <a href="#details">Project Details</a> 
2. <a href="#application">Application</a>
3. <a href="#screenshots">Screenshots</a>
4. <a href="#steps">Steps to run after Clone</a>
5. <a href="#acknowledgements">Acknowledgements</a>

---
### <a name="details"> 1. Project Details</a>
The main objective of this project is to create a platform for online electronic shopping. It is a multi seller e-commerce website which is capable of maintaining the storage of a large number of products by different sellers. The website is capable enough to store the products and also perform some updating on the products that are stored. It has a user friendly interface that will guide users to easily buy electronics for a reasonable price directly from the seller. This System allows to view the items stored in the cart and the order details.There are two roles **admin** and **user**.The **admin** can add, edit, view and delete thier own products. The **user** can add to cart, order and view products on this website.


This system stores all the information in a MYSQL Database. It stores data of the users/admins logged in, details of the admin, the products, cart details, order details, payment details. The user has to register to the website to order products to avoid spam user logins. Laravel includes built-in authentication and session services which are typically accessed via the Auth and Session facades. The frontend user interface of the website is developed using **HTML5, CSS, Javascript and Bootstrap**.

---

### <a name="application"> 2. Application</a>
Electronic Store Management system is a system which will help the owners of the electronic equipment shops to carry out the day to day businesses in a smooth and organized way. This system is developed specifically to ease the needs of the department of sales and purchase.

Webpage Working: <br>
On the main page, you have a login or register link at the right top corner which will take a particular user to its respective dashboard according to his role.

Admin/dealer dashboard: <br>
On the admin dashboard we have options like select, add, update and delete products which  will  let a particular company dealer add and view only products added by the currently logged in dealer, protecting the privacy of other dealers.

User/customer dashboard: <br>
After logging in as a customer, it will redirect the user to the welcome page where customers can add or remove products to or from cart, view products category wise and confirm his order and proceed to payment.

---

### <a name="screenshots"> 3. Screenshots</a>
### User
>Homepage <br> <br>
![user:homepage](https://user-images.githubusercontent.com/58616834/102789172-c5be4280-43c9-11eb-8671-50108fe548f8.png)

>All Products <br><br>
![products](https://user-images.githubusercontent.com/58616834/102789393-1df54480-43ca-11eb-9407-48ca4366e404.png)

>Cart <br><br>
![cart](https://user-images.githubusercontent.com/58616834/102789651-6a408480-43ca-11eb-8405-b080a559e206.png)

>Orders <br><br>
![orders](https://user-images.githubusercontent.com/58616834/102789814-a4118b00-43ca-11eb-8239-b2ad48d312e1.png)

### Admin
>Homepage <br><br>
![admin:homepage](https://user-images.githubusercontent.com/58616834/102790126-05395e80-43cb-11eb-86b7-4cf43758e14a.png)

>All products added by the currently logged in dealer <br><br>
![products added](https://user-images.githubusercontent.com/58616834/102790198-200bd300-43cb-11eb-8cd5-9f440ec37386.png)

>Product Details <br><br>
![product details](https://user-images.githubusercontent.com/58616834/102790413-67925f00-43cb-11eb-9fab-2240f37344c3.png)

---

### <a name="steps"> 4. Steps to run after Clone</a>
- Open the project in Command prompt, cd into the project and run ``composer install``
- To install the npm dependencies, run ``npm install``
- Rename '.env.example' to '.env'
- Generate an app encryption key by running this command ``php artisan key:generate``
- Create an empty database and add the details in the '.env' file
- Migrate the database by ``php artisan migrate``
- Run ``php artisan serve`` to test the project.

---

### <a name="acknowledgements"> 5. Acknowledgements</a>
<div>
    <table>
        <td align=center>
            <a href="https://github.com/clare0901">
                <img src="https://user-images.githubusercontent.com/58616834/102794374-4c2a5280-43d1-11eb-8012-85a071ae1577.png" alt="Clare" height="150" width="150">
                <br><sub><b>Clare Rebello</b></sub>
            </a>
        </td>
        <td align=center>
            <a href="https://github.com/Shravani01007">
                <img src="https://user-images.githubusercontent.com/58616834/102800887-86e4b880-43da-11eb-95d1-6e739eb6886f.png" alt="Shravani" height="150" width="150">
                <br><sub><b>Shravani Dhuri</b></sub>
            </a>
        </td>
        <td align=center>
            <a href="https://github.com/katerebello">
                <img src="https://user-images.githubusercontent.com/58616834/102801031-b1cf0c80-43da-11eb-9531-2f14278265c7.png" alt="Kate" height="150" width="150">
                <br><sub><b>Kate Rebello</b></sub>
            </a>
        </td>
    </table>
</div>
    
    
