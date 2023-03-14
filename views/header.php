<nav class="bg-white border-gray-200 px-2 sm:px-4 py-2">
  <div class="container flex flex-wrap items-center justify-between mx-auto">
    <a href="<?= URL ?>inicio/home" class="flex items-center">
      <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 mr-3 sm:h-9" alt="Logo" />
      <span class="self-center text-xl font-semibold whitespace-nowrap">LOGO HERE</span>
    </a>

    <?php
    if (isset($_SESSION['cargo'])) {
      if ($_SESSION['cargo'] != "Invitado") {
    ?>
        <div class="flex items-center md:order-2">
          <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
            <span class="sr-only">Open user menu</span>
            <img class="w-8 h-8 rounded-full" src="../public/img/profile-picture-3.jpg" alt="user-photo">
          </button>
          <!-- Dropdown menu -->
          <?php
          if (isset($_SESSION['codigo'])) {
          ?>
            <div class="z-50 my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow" id="user-dropdown">
              <div class="px-4 py-3">
                <span class="block text-sm text-gray-900">
                  <?php
                  echo $_SESSION['usuario'];
                  ?>
                </span>
                <span class="block text-sm font-medium text-gray-500 truncate">
                  <?php
                  echo $_SESSION['cargo'];
                  ?>
                </span>
              </div>
              <ul class="py-2" aria-labelledby="user-menu-button">
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Dashboard</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Earnings</a>
                </li>
                <li>
                  <a href="<?= URL ?>login/cerrarSesion" class="cerraresion block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Close session</a>
                <?php
              }
                ?>
                </li>
              </ul>
            </div>
            <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="mobile-menu-2" aria-expanded="false">
              <span class="sr-only">Open main menu</span>
              <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
              </svg>
            </button>
        </div>

        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
          <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-0 md:mt-0 md:text-md md:font-semibold md:border-0 md:bg-white md">
            <li>
              <a href="<?= URL ?>inicio/home" class="block py-1 pl-1 pr-1 text-gray-500 rounded-lg hover:bg-gray-100 md:hover:bg-gray-100 md:py-2 md:px-3" aria-current="page">Home</a>
            </li>
            <li>
              <a href="<?= URL ?>gestionAcontecimiento/acontecimientos" class="block py-1 pl-1 pr-1 text-gray-500 rounded-lg hover:bg-gray-100 md:hover:bg-gray-100 md:py-2 md:px-3">Events</a>
            </li>
            <li>
              <a href="<?= URL ?>Municipio/TablaMunicipios" class="block py-1 pl-1 pr-1 text-gray-500 rounded-lg hover:bg-gray-100 md:hover:bg-gray-100 md:py-2 md:px-3">Municipalities</a>
            </li>
            <li>
              <a href="<?= URL ?>empleado/TablaEmpleados" class="block py-1 pl-1 pr-1 text-gray-500 rounded-lg hover:bg-gray-100 md:hover:bg-gray-100 md:py-2 md:px-3">Employees</a>
            </li>
            <li>
              <a href="<?= URL ?>gestionUsuario/TablaUsuario" class="block py-1 pl-1 pr-1 text-gray-500 rounded-lg hover:bg-gray-100 md:hover:bg-gray-100 md:py-2 md:px-3">Users</a>
            </li>
            <li>
              <a href="<?= URL ?>informe/pdfProyectos" class="block py-1 pl-1 pr-1 text-gray-500 rounded-lg hover:bg-gray-100 md:hover:bg-gray-100 md:py-2 md:px-3">Reports</a>
            </li>
          </ul>
        </div>

      <?php
      }
    } else {
      ?>

      <div class="flex items-center md:order-2">
        <?php
        if (!isset($_SESSION['codigo'])) {
        ?>
          <a href="<?php echo URL; ?>Login/index" type="button" class="block py-2 px-3 ml-2 text-black rounded-lg hover:bg-gray-100 bg-transparent hover:bg-gray-300 font-semibold border border-sky-500 hover:border-gray-300" id="user-menu-button-log">
            Log in
          </a>
        <?php
        }
        ?>
        <a href="#" type="button" class="block py-2 px-3 ml-2 text-white rounded-lg hover:bg-gray-100 bg-sky-500 hover:bg-sky-600 font-semibold" id="user-menu-button-singup">
          Sing up Free
        </a>

        <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="mobile-menu-2" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>

      <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
        <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-0 md:mt-0 md:text-md md:font-semibold md:border-0 md:bg-white md">
          <li>
            <a href="#" class="block py-1 pl-1 pr-1 text-gray-500 rounded-lg hover:bg-gray-100 md:hover:bg-gray-100 md:py-2 md:px-3" aria-current="page">Home</a>
          </li>
          <li>
            <a href="#" class="block py-1 pl-1 pr-1 text-gray-500 rounded-lg hover:bg-gray-100 md:hover:bg-gray-100 md:py-2 md:px-3">Events</a>
          </li>
          <li>
            <a href="#" class="block py-1 pl-1 pr-1 text-gray-500 rounded-lg hover:bg-gray-100 md:hover:bg-gray-100 md:py-2 md:px-3">Municipalities</a>
          </li>
          <li>
            <a href="#" class="block py-1 pl-1 pr-1 text-gray-500 rounded-lg hover:bg-gray-100 md:hover:bg-gray-100 md:py-2 md:px-3">Employees</a>
          </li>
          <li>
            <a href="#" class="block py-1 pl-1 pr-1 text-gray-500 rounded-lg hover:bg-gray-100 md:hover:bg-gray-100 md:py-2 md:px-3">Users</a>
          </li>
          <li>
            <a href="#" class="block py-1 pl-1 pr-1 text-gray-500 rounded-lg hover:bg-gray-100 md:hover:bg-gray-100 md:py-2 md:px-3">Reports</a>
          </li>
        </ul>
      </div>
    <?php
    }
    ?>

  </div>
</nav>