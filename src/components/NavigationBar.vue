<script>
// import HelloWorld from "./components/HelloWorld.vue";
// import logo-upneto from "./components/TheWelcome.vue";
</script>

<template>
  <header role="banner">
    <nav class="navbar navbar-expand-lg navbar-dark text-white navabar__bg">
      <div class="container-fluid">
        <a class="navbar-brand" title="UPNETO | Front-End Developer" href="#">
          <img
            class="navbar__logo"
            alt="UPNETO logo"
            src="../assets/logo-upneto.png"
          />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" title="About me" href="#about">About me</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" title="My projects" href="#project"
                >Projects</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" title="Contact me" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
</template>
