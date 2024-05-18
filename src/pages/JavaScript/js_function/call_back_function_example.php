<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Callback Function Example</title>
</head>
<body>
<script>
   let display=(some)=>console.log(some);
   let calculate=(num1, num2, callBack) => {
    let  sum = num1 + num2;

    if(callBack) callBack(sum);

    return sum;

   };

 calculate(5, 5, display);
</script>
</body>
</html>