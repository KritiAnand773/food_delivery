<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
  <div class="container">
      <form>
      <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Full Name</label>
          <input type="email" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Mobile Number</label>
          <input type="email" class="form-control" id="exampleInputEmail1" >
        </div>
        
        <select class="form-select" aria-label="Default select example" style="width:178%;" >
            <option selected>City</option>
            <option value="1">Barharwa</option>
            <option value="2">Rajmahal</option>
            <option value="3">Tinpahar</option>
            <option value="3">Sahibganj</option>
        </select>
        <br>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" 
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Address</label>
          <input type="password" class="form-control" placeholder="Area Name" id="area">
          <br>
          <input type="password" class="form-control" placeholder="Landmark" id="landmark">
        
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Save Address</label>
        </div>
        <button type="submit" class="btn ">Submit</button>
      </form>
  </div>
  
  <style>
body{
   background: silver;
}
 .container {
    display: flex;
    justify-content: center;
    margin-left: -20px;
    margin-top: 28px;
}

    .form-control{
      width:178%;
    }
    button{
      width: 178%;
      background:black !important;
      color:white !important;
    }
   

    @media(max-width:575px){
      .container {
    margin-left: -43px;
    
    }
    .mb-3 {
    margin-bottom: 1rem!important;
    width: 77%;
    margin-left: 0rem;
   }
   .form-select{
    width:136% !important;
   }
   #area{
    width:230% !important;
   }
   #landmark{
    width: 230% !important;
   }
    }
  </style>
</body>
</html>
