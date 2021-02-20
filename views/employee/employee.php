<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee</title><!-- TODO: create the employee name dinamically -->
</head>

<body>
  <form action="" class="form">
        <label class="form__label" for="firstName">First Name</label>
        <input class="form__input" type="text" name="name" id="firstName">

        <label class="form__label" for="lastName">Last Name</label>
        <input class="form__input" type="text" name="lastName" id="lastName" >

        <label class="form__label" for="email">e-mail</label>
        <input class="form__input" type="email" name="email" id="email">

        <label class="form__select" for="gender">First Name</label>
        <select name="gender" id="gender">
            <option value="">Women</option>
            <option value="">Man</option>
            <option value="">No-binary</option>
        </select>

        <label class="form__label" for="streetAddress">Street Address</label>
        <input class="form__input" type="text" name="streetAddress" >

        <label class="form__label" for="state">State</label>
        <input class="form__input" type="text" name="state" id="state" >

        <label class="form__label" for="city">City</label>
        <input class="form__input" type="text" name="city" id="city">
        
        <label class="form__label" for="age">Age</label>
        <input class="form__input" type="number" name="age" id="age" max="99" min="1">

        <label class="form__label" for="postalCode">Postal Code </label>
        <input class="form__input" type="number" name="PC" id="postalCode" pattern="[0-9]{6}">

        <label class="form__label" for="phoneNumber">Phone Number</label>
        <input class="form__input" type="number" name="phoneNumber" id="phoneNumber" >
    </form>
</body>

</html>