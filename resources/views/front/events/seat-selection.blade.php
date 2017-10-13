@extends('front.layouts.events')

@push('head-links')
  <link href="/css/front/events/seat-selection.css" rel="stylesheet">
@endpush

@section('content')
  <form action="{{ route('front.events.checkout', ['event' => 'event']) }}" method="POST">
    {{ csrf_field() }}
    <div id="front-events-seat-selection">
      <section class="hero">
        <div class="container">
          <div class="event-info">
            <h1 class="event-title">De La Rut, <small class="zone">General A</small></h1>
            <h2 class="event-date">16, 17 y 18 de Noviembre 2017</h2>
            <h3 class="event-location">Parqueo 5, Ruta 5 - Zona 4, Guatemala City</h3>
          </div>
        </div>
      </section>
      <section class="event-date-selection">
        <div class="container">
          <h5 class="title">Selecciona una fecha</h5>
          
          @include('fields.radio-date', [
            'field' => $seatSelectionForm->getField('date'),
            'gridListClass' => 'grid-list-5 grid-list-1-xs grid-list-2-sm'
            ])

        </div>
      </section>
      <section class="tickets-quantity-selection">
        <div class="container">
          <h5 class="title">¿Cuántos boletos quieres?</h5>

          <div class="row">
            <div class="col-sm-3">
              @include('fields.number-counter', [
                'field' => $seatSelectionForm->getField('quantity'),
                ])
            </div>
          </div>

        </div>
      </section>
      <section class="seat-plan-wrapper">
        <header class="section-header">
          <div class="container">
            <h5>Escoge tus lugares</h5>
            <i class="icon-chevron-down"></i>
          </div>
        </header>
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
              @include('front.common.tickets-cart-wrapper', [
                'callToAction' => '<a href="#checkout" class="btn btn-info btn-block btn-lg">Continuar</a>'
                ])
            </div>
            <div class="col-sm-8">
              <div class="seat-plan">
                @svg('svg/events/zone56')
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="checkout-wrapper" id="checkout">
        <div class="container">
          <h5 class="title">Realiza tu pago</h5>
          <div class="row">
            <div class="col-sm-8">
              @include('fields.text', [
                'field' => $seatSelectionForm->getField('name'),
                ])

              @include('fields.text', [
                'field' => $seatSelectionForm->getField('credit_card_number'),
                ])
              
              <div class="row">
                <div class="col-sm-4">
                  @include('fields.text', [
                    'field' => $seatSelectionForm->getField('expiration_month'),
                    ])
                </div>
                <div class="col-sm-4">
                  @include('fields.text', [
                    'field' => $seatSelectionForm->getField('expiration_year'),
                    ])
                </div>
                <div class="col-sm-4">
                  @include('fields.text', [
                    'field' => $seatSelectionForm->getField('cvv'),
                    ])
                </div>
              </div>

              @include('fields.text', [
                'field' => $seatSelectionForm->getField('email'),
                ])

            </div>
            <div class="col-sm-4">
              @include('front.common.tickets-cart-wrapper', [
                'callToAction' => '<button type="submit" class="btn btn-primary btn-block btn-lg">Pagar</button>'
                ])
            </div>
          </div>
        </div>
      </section>
    </div>
  </form>
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










