<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>e-Tiket Konser</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
      theme: {
        container: {
          center: true,
          padding: "16px",
        },
        extend: {
          screens: {
            "2xl": "1320px",
          },
        },
      },
    }
  </script>
</head>
<body class="bg-no-repeat bg-center" style="background-image: url('img/bg.jpg')">
    <div class="container">
      <div class="ml-20 w-5/6 pt-20 justify-content-center">
        <div class="max-w-xl mx-auto text-center">
          <h1 class="font-bold text-xl mb-12 text-slate-200">Isi Form berikut untuk pembelian tiket</h1>
        </div>
        <div>
          <form class="p-4 bg-slate-200 rounded-lg">
              <div class="mb-6">
                  <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-800">Nama Lengkap</label>
                  <input type="text" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
              </div>
              <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-800">Email</label>
                <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@email.com" required="">
              </div>
              <div class="mb-6">
                <label for="nohp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-800">No. Handphone</label>
                <input type="text" id="nohp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
              </div>
              <div class="mb-6">
                  <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-800">Alamat</label>
                  <input type="text" id="alamat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                </div>
              <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
          </form>
        </div>
      </div>
    </div>>
  
</body>
</html>