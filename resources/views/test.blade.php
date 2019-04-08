<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 20px;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}
</style>
</head>
<body>

        <button class="btn"><i class="fa fa-download"  <a href="{{ URL::to( 'uploads/card/' . $img)  }}" target="_blank">{{ $img }}</a>></i> Download</button>
{{auth::user()->id}}
    <img src='uploads/card/card.jpg'>

