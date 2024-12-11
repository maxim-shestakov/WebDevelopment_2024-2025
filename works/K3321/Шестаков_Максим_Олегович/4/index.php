<!DOCTYPE html>
<html>
<head>
  <title>Заказ товара</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <form action="script.php" method="post">
    <h2>Заказ товара</h2>
    <label for="surname">Фамилия:</label>
    <input type="text" id="surname" name="surname" required> <br>

    <label for="name">Имя:</label>
    <input type="text" id="name" name="name" required> <br>

    <label for="patronymic">Отчество:</label>
    <input type="text" id="patronymic" name="patronymic" required> <br>

    <label for="address">Адрес для физической доставки товара:</label>
    <input type="text" id="address" name="address" required> <br>

    <label for="phone">Телефон:</label>
    <input type="text" id="phone" name="phone" required> <br>

    <label for="email">Адрес электронной почты:</label>
    <input type="email" id="email" name="email" required> <br>

    <label for="product">Выберите товар:</label> 
    <select id="product" name="product" required>
      <option value="">Выберите товар</option>
      <option value="Кроссовки">Кроссовки</option>
      <option value="Футболка">Футболка</option>
      <option value="Джинсы">Джинсы</option>
    </select> <br>

    <label for="comment">Комментарий по заказу:</label>
    <textarea id="comment" name="comment"></textarea> <br> <br> 

    <button type="submit">Отправить заказ</button> 
  </form>
</body>
</html>