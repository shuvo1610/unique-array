<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>How to Get Only Unique Values From Array in JavaScript? - shouts.dev</title>
</head>
<body>

</body>

<script type="text/javascript">
    const arr = [1, 2, 3, 2, 4, 3];
    const uniqueArr = arr.reduce((accumulatorArray , currentValue) => {
        if(!accumulatorArray.includes(currentValue)){
            accumulatorArray.push(currentValue);
        }
        return accumulatorArray;
    }, []);
    console.log(uniqueArr); // [1, 2 ,3 ,4]
</script>

</html>
