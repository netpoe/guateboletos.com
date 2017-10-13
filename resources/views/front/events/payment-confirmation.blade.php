@extends('front.layouts.events')

@push('head-links')
  <link href="/css/front/events/payment-confirmation.css" rel="stylesheet">
@endpush

@section('content')
  <div id="front-events-payment-confirmation">
    <section class="hero">
      <div class="container-md">
        <h1 class="title">!Todo está listo!</h1>
        <h2>Tu pago se realizó exitosamente y hemos enviado a tu correo la información de tus boletos.</h2>
        <h2>¡Disfruta tu evento!</h2>
        <div class="tickets-info">
          <h3 class="order-id">Folio de confirmación: ACH1627J</h3>
          <h3 class="event-title">De La Rut, <small class="zone">General A</small></h1>
          <h4 class="event-date">15 de Noviembre 2017</h2>
          <h4 class="event-location">Parqueo 5, Ruta 5 - Zona 4, Guatemala City</h3>
          <div class="tickets-location">
            <p class="seats">Asientos H24, H25, H26</p>
          </div>
        </div>
        <div class="share-wrapper">
          <h5>Comparte este evento con tus amigos y gana descuentos en tus próximas compras si alguno de ellos compra boletos utilizando tu URL único:</h5>
          <fieldset class="form-group">
            <input type="text" class="form-control form-control-lg" value="http://guateboletos.com/ref/567yhi">
          </fieldset>
        </div>
        <nav>
          <a href="#" class="btn btn-info btn-lg">Ver más eventos</a>
        </nav>
      </div>
    </section>
  </div>
@endsection

@push('footer-scripts')
  <script>
    (function(global){
      global.highlightSvgZone = function(zone){
        document
          .querySelectorAll('.ticket-zone-wrapper svg .' + zone)
          .forEach(function(z){
            z.setAttribute('fill', z.dataset.color);
          });
      }

      global.highlightTicket = function(zone, color){
        document
          .querySelectorAll('.ticket.' + zone)
          .forEach(function(t){
            t.style.backgroundColor = t.dataset.color;
            t.classList.add('highlight');
          });
      }

      global.unhighlightTicket = function(zone, color){
        document
          .querySelectorAll('.ticket.' + zone)
          .forEach(function(t){
            t.style.backgroundColor = 'white';
            t.classList.remove('highlight');
          });
      }

      document
        .querySelectorAll('.zone-5-row')
        .forEach(function(z){
          var className = z.getAttribute('class');
          z.onmouseover = function(e){
            highlightSvgZone(className);
            highlightTicket('ticket-' + className);
          }
          z.onmouseleave = function(e){
            unhighlightSvgZone(className);
            unhighlightTicket('ticket-' + z.getAttribute('class'));
          }
        });

      global.unhighlightSvgZone = function(zone, color){
        document
          .querySelectorAll('.ticket-zone-wrapper svg .' + zone)
          .forEach(function(z){
            z.setAttribute('fill', '#D3D2D2');
          })
      }
    })(window);
  </script>
@endpush










