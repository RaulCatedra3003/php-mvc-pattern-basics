<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee</title><!-- TODO: create the employee name dinamically -->
</head>

<body>
  <form action="#" class="form">
    <img src="<?= isset($employee) ? $employee['avatar'] : "../assets/images/no-user.png" ?>" class="img_profile" alt="avatar">
    <h4 class="form__title"><?= isset($employee) ? $employee['name'] . "'s profile" : "New employee" ?></h4>

    <section class="form-section">
      <input class="form-section__input" type="text" name="name" id="firstName" value="<?= isset($employee) ? $employee['name'] : '' ?>">
      <label class="form-section__label" for="firstName">First Name</label>
      <label class="form-section__label" for="lastName">Last Name</label>
      <input class="form-section__input" type="text" name="lastName" id="lastName" value="<?= isset($employee) ? $employee['lastName'] : '' ?>">
    </section>

    <section class="form-section">
      <label class="form-section__label" for="email">e-mail</label>
      <input class="form-section__input" type="email" name="email" id="email" value="<?= isset($employee) ? $employee['email'] : '' ?>">
      <label class="form-section__select" for="gender">First Name</label>
      <select name="gender" id="gender" class="form-section__input">
        <option value="woman" <?= isset($employee) ? ($employee['gender'] == "woman" ? "selected" : "") : '' ?>>Women</option>
        <option value="man" <?= isset($employee) ? ($employee['gender'] == "man" ? "selected" : "") : '' ?>>Man</option>
        <option value="nobinary" <?= isset($employee) ? ($employee['gender'] == "nobinary" ? "selected" : "") : '' ?>>No-binary</option>
      </select>
    </section>

    <section class="form-section">
      <label class="form-section__label" for="streetAddress">Street Address</label>
      <input class="form-section__input" type="text" name="streetAddress" value="<?= isset($employee) ? $employee['streetAddress'] : '' ?>">
      <label class="form-section__label" for="state">State</label>
      <input class="form-section__input" type="text" name="state" id="state" value="<?= isset($employee) ? $employee['state'] : '' ?>">
    </section>

    <section class="form-section">
      <label class="form-section__label" for="city">City</label>
      <input class="form-section__input" type="text" name="city" id="city" value="<?= isset($employee) ? $employee['city'] : '' ?>">
      <label class="form-section__label" for="age">Age</label>
      <input class="form-section__input" type="number" name="age" id="age" max="99" min="1" value="<?= isset($employee) ? $employee['age'] : '' ?>">
    </section>

    <section class="form-section">
      <label class="form-section__label" for="postalCode">Postal Code </label>
      <input class="form-section__input" type="number" name="PC" id="postalCode" pattern="[0-9]{6}" value="<?= isset($employee) ? $employee['PC'] : '' ?>">
      <label class="form-section__label" for="phoneNumber">Phone Number</label>
      <input class="form-section__input" type="number" name="phoneNumber" id="phoneNumber" value="<?= isset($employee) ? $employee['phoneNumber'] : '' ?>">
    </section>
  </form>
  <a href="index.php?controller=employee&action=getAllEmployees" class="button">Back</a>
</body>

</html>