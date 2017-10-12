@extends('front.layouts.events')

@push('head-links')
  <link href="/css/front/events/show.css" rel="stylesheet">
@endpush

@section('content')
  <div id="front-events-show">
    <section class="hero">
      <div class="container">
        <div class="event-info">
          <h1 class="event-title">De La Rut</h1>
          <h2 class="event-date">16, 17 y 18 de Noviembre</h2>
          <h3 class="event-location">Parqueo 5, Ruta 5 - Zona 4, Guatemala City</h3>
        </div>
        <div class="footer">
          <p>Compra tus boletos</p>
          <i class="icon-chevron-down"></i>
        </div>
      </div>
    </section>
    <section class="checkout">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 tickets-list-wrapper">
            <div class="tickets-list">
              <article data-color="red" class="ticket ticket-zone-5-row" 
                onmouseover="return highlightSvgZone('zone-5-row')"
                onmouseleave="return unhighlightSvgZone('zone-5-row')">
                <div class="color-bar"></div>
                <div class="top">
                  <h5 class="title">General A</h5>
                  <small>70 lugares disponibles</small>
                </div>
                <div class="center">
                </div>
                <div class="bottom">
                  <div class="price">
                    <span class="value">Q.70.00</span>
                    <small class="price-description">incluye IVA y comisión</small>
                  </div>
                  <div class="cta">
                    <a href="{{ route('front.events.seat-selection', ['event' => 'event']) }}" class="btn btn-primary btn-block">Comprar</a>
                  </div>
                </div>
              </article>
              <article class="ticket">
                
              </article>
            </div>
          </div>
          <div class="col-sm-8">
            <div class="ticket-zone-wrapper">
              @svg('svg.events.overview')
            </div>
          </div>
        </div>
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










