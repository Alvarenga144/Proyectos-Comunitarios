<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Custom -->
    <link rel="stylesheet" type="text/css" href="<?= URL ?>public/css/customStyles.css">
    <!-- Tailwind css CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" type="text/css" href="<?= URL ?>public/css/validetta.min.css">
    <title>Login | APP </title>
</head>

<body>
    <div class="flex justify-center items-center h-screen bg-gradient-to-r from-cyan-500 to-blue-500">
        <div class="bg-gray-100 w-80 rounded-lg text-black pb-8 pt-4 px-6">
            <h2 class="font-semibold text-gray-700 text-3xl text-center">Community Project Manager</h2>
            <img src="../public/img/plantgroth.png" alt="plantgroth" class="rounded-lg mb-6 mt-2">
            
            <form role="form" id="frmLogin">
                <div>
                    <input id="user" name="user" class="w-full mb-3 rounded-lg h-8 px-2 bg-gray-100 text-gray-500 border-t-2 border-b-2 border-t-white border-b-gray-300 font-semibold" type="text" placeholder="User">
                </div>

                <div>
                    <input id="psw" type="password" class="w-full mb-3 rounded-lg h-8 px-2 bg-gray-100 text-gray-500 border-t-2 border-b-2 border-t-white border-b-gray-300 font-semibold" name="password" placeholder="Password">
                </div>
                <div>
                    <select name="typeuser" id="typeuser" class="w-full mb-2 rounded-lg h-8 px-2 bg-gray-100 text-gray-400 border-t-2 border-b-2 border-t-white border-b-gray-300 font-semibold">
                        <option value="Invitado">Guest</option>
                        <option value="Responsable">Employee</option>
                    </select>
                </div>
                    <div>
                        <button type="submit" class="w-full py-2 text-white rounded-lg bg-sky-500 font-semibold mt-6 hover:bg-sky-600 hover:bg-gray-100 border-t-2 border-b-2 border-t-white border-b-sky-600">Log in</button>
                        <!--<a href="#">Login</a>-->
                    </div>
            </form>
            <div class="mt-2 font-semibold text-sky-500 text-sm text-center justify-center">
                <a class="hover:border-b hover:border-b-sky-700 hover:text-sky-700">Forgot your password?</a>
            </div>
        </div>
        
    </div>
    



    <!-- jQuery-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="<?= URL ?>public/js/login.js"></script>
</body>

</html>