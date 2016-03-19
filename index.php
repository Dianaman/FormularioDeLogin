  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/stylesheet.css">
    </head>
    <body>

      <form action="index.html" method="post">
      
        <h1>Registro</h1>
        
        <fieldset>
          <legend><span class="number">1</span>Información básica</legend>
          <label for="name">Nombre de usuario:</label>
          <input type="text" id="name" name="user_name">
          
          <label for="mail">Correo electrónico:</label>
          <input type="email" id="mail" name="user_email">
          
          <label for="password">Contraseña:</label>
          <input type="password" id="password" name="user_password">
          
          <label for="password">Vuelva a ingresar la contraseña:</label>
          <input type="password" id="password2" name="user_password2">

          <label>Fecha de nacimiento:</label>
          <input type="date" id="birth" name="user_age"><br>

          <label>Sexo:</label>
          <input type="radio" id="male" value="male" name="user_gender">Masculino<br>
          <input type="radio" id="female" value="female" name="user_gender">Femenino<br>
          
        </fieldset>
        
        <fieldset>
          <legend><span class="number">2</span>Información laboral</legend>
          <label for="bio">Biografía:</label>
          <textarea id="bio" name="user_bio"></textarea>

          <label for="job">Ocupación:</label>
          <select id="job" name="user_job">
            <optgroup label="Web">
              <option value="frontend_developer">Desarrollados Front-End</option>
              <option value="php_developor">Desarrollador PHP</option>
              <option value="python_developer">Desarrollador Python</option>
              <option value="rails_developer">Desarrollador Rails</option>
              <option value="web_designer">Diseñador Web</option>
              <option value="WordPress_developer">Desarrollador WordPress</option>
            </optgroup>
            <optgroup label="Mobile">
              <option value="Android_developer">Desarrollador Androild</option>
              <option value="iOS_developer">Desarrollador iOS</option>
              <option value="mobile_designer">Diseñador Mobile</option>
            </optgroup>
            <optgroup label="Empresarial">
              <option value="business_owner">Empresario</option>
              <option value="freelancer">Trabajador Freelance</option>
            </optgroup>
            <optgroup label="Otros">
              <option value="secretary">Secretario</option>
              <option value="maintenance">Mantenimiento</option>
            </optgroup>
          </select>
          
          <label>Intereses:</label>
          <input type="checkbox" id="development" value="interest_development" name="user_interest"><label class="light" for="development">Desarrollo</label><br>
            <input type="checkbox" id="design" value="interest_design" name="user_interest"><label class="light" for="design">Diseño</label><br>
          <input type="checkbox" id="business" value="interest_business" name="user_interest"><label class="light" for="business">Empresarial</label><br>
          <br>
          
          <label for="url">URL:</label>
          <input type="url" id="site" name="user_site">

        </fieldset>
        <fieldset>
          <legend><span class="number">3</span>Extras</legend>
          <label>Número favorito:</label>
          <input type="number" id="fav_num"name="user_num"  min="1" max="100"><br>

          <label>Color de usuario:</label>
          <input type="color" id="un_color"name="user_color"><br>
        </fieldset>

        <button type="submit">Registrame</button>
      </form>
      
    </body>
</html>