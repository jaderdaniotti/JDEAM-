<x-layout>

  <section class="header bg-section-claire pt-0 px-0">
    @livewire('apigames.index')
  </section>  
  <x-profileimg/>
  <div class="torna-su">
    <a href="#" id="tornaSuBtn" class="btn"><i class="bi bi-arrow-up-circle-fill"></i></a>
    </div>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
          document.getElementById('tornaSuBtn').style.display = 'none';
      })
      window.onscroll = function() {
      if ( document.documentElement.scrollTop > 80) {
          document.getElementById("tornaSuBtn").style.display = "block";
      } 
      else {
          document.getElementById("tornaSuBtn").style.display = "none";
      }
      };
      
      document.getElementById("tornaSuBtn").onclick = function() {
          window.scrollTo({ top: 0, behavior: 'smooth' });
      };
  </script>
  <x-footer/>
  </x-layout>









