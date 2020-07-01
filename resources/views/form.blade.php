<!DOCTYPE html>
<html>
    <head>
        <title> Akun Baru SanberBook </title>
        <meta charset="UTF-8">
    </head>
       
    <body>
        <form action="/welcome" method="POST">
            @csrf
            <h1> Buat Account Baru </h1>
            
            <h4> Sign Up Form </h4>
            
            <label for="first_name"> First Name: </label> <br><br>
            <input type="text" id="first_name" name="first_name"> <br><br>
            <label for="last_name"> Last Name: </label> <br><br>
            <input type="text" id="last_name" name="last_name"> <br><br>
           
            <label> Gender: </label>  <br><br>
            <input type="radio" name="gender"> Male <br>
            <input type="radio" name="gender"> Female <br>
            <input type="radio" name="gender"> Other <br><br>
           
            <label> Nationality: </label> <br><br>
            <select>
              <option name="nationality"> Indonesian</option>
              <option name="nationality"> Singaporean</option>
              <option name="nationality"> Malaysian</option>
              <option name="nationality"> Australian</option>
            </select> <br><br>
            
            <label> Language Spoken: </label> <br><br>
            <input type="checkbox" name="language"> Bahasa Indonesia <br>
            <input type="checkbox" name="language"> English <br>
            <input type="checkbox" name="language"> Other <br><br>
            
            <label> Bio: </label> <br><br>
            <textarea cols="40" rows="10"></textarea> <br><br>
            </a><input type="submit" Value="Sign Up" name="bio">
        </form>




    </body>
</html>