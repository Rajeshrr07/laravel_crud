<!DOCTYPE html>
<html>
    <head>
        <title>Create</title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
    <body>
        <form method="post" action="{{ URL('store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group ml-5 mr-5">
               <label for="first_name">First Name</label>
               <input type="text" name="first_name" class="form-control" id="exampleFormControlInput1" placeholder="Firstname" required>
            </div>
            <div class="form-group ml-5 mr-5">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" class="form-control" id="exampleFormControlInput2" placeholder="Lastname" required>
             </div>
             <div class="form-group ml-5 mr-5">
                <label for="phone_number">Phone Number</label>
                <input type="number" name="phone_number" class="form-control" id="exampleFormControlInput3" placeholder="Phonenumber" required>
             </div>
            <div class="form-group ml-5 mr-5 ">
              <label for="exampleFormControlInput1">Email address</label>
              <input type="email" name="email" class="form-control" id="exampleFormControlInput4" placeholder="email" required>
            </div>
            <label for="gender" class="ml-5 mr-5">Gender</label>
            <div class="form-check ml-5 mr-5">
                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="male" required>
                <label  class="form-check-label" for="gender">
                  Male
                </label>
              </div>
              <div class="form-check ml-5 mr-5 ">
                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="female" required>
                <label  class="form-check-label" for="gender">
                  Female
                </label>
              </div>
            <div class="form-group ml-5 mr-5">
              <label for="qualifications">Qualification</label>
              <select name="qualifications" class="form-control" id="exampleFormControlSelect1" required>
                <option>BE</option>
                <option>ME</option>
                <option>B.Tech</option>
              </select>
            </div>
            <div class="form-group ml-5 mr-5">
                <label for="image">Image</label>
                <input name="image" type="file" class="form-control-file" id="exampleFormControlFile1" required>
            </div>
    
            <button type="submit" class="btn btn-info ml-5" style="margin-top:12px"> insert</button>
          </form>
    </body>
</html>