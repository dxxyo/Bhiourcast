<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bhiourcast!</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-screen mt-10 mb-10 bg-gradient-to-b from-[#190060] to-[#1A0014]">
    <div class="text-white flex flex-col items-center justify-center w-full">
        <img src="../assets/DMV.png" class="w-[154px]" alt="logo dmv">
        <a href="/" class="text-[36px] font-bold uppercase"> Bhiourcast</a>
        <h5 class="font-semibold text-[14px]">!- Rahasiamu 101% Aman -!</h5>
    </div>

    <div class="h-max w-full flex flex-col justify-center items-center space-y-6 mt-16 ">

        <div class="flex flex-col rounded-lg p-[25px] bg-white bg-opacity-10 backdrop-blur-md w-[335px] h-max border border-white border-opacity-10">
            <div class="flex items-center space-x-3 justify-center">
                <h1 class="text-[24px] text-white font-semibold ">Login</h1>
            </div>

            <form method="post" action="../script/post.php">
                <input type="hidden" name="type" value="login">
                <input name="username" class="w-full mt-8 py-2 text-[14px] font-thin tracking-widest px-4 text-pink-200 bg-white bg-opacity-5 backdrop-blur-sm rounded-xl " placeholder="Username"></input>
                <input name="password" class="w-full mt-3 py-2 text-[14px] font-thin tracking-widest px-4 text-pink-200 bg-white bg-opacity-5 backdrop-blur-sm rounded-xl " placeholder="Password"></input>
                <input type="submit" class="w-full text-center mt-10 py-2 text-[14px] font-bold text-[#0A0060] bg-white rounded-xl hover:bg-gradient-to-b from-pink-200 hover:scale-105 to-white duration-200 ease-linear" value="Masuk !"></input>

            </form>
        </div>

    </div>

</body>

</html>