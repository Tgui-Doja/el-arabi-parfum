<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animated Title</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="animated-title">Your Title Here</div>
</body>
</html>
<style>
  

.animated-title {
    font-size: 3em;
    color: rgb(193, 20, 20);
    position: absolute;
    top: 0;
    width: 100%;
    text-align: center;
    animation: fadeIn 3s ease-in-out infinite;
}

@keyframes fadeIn {
    0% {
        opacity: 0;
    }
    50% {
        opacity: 1;
    }
    100% {
        opacity: 0;
    }
}

</style>