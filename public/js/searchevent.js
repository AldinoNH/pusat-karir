$(document).ready(function () {
  
  $('#searchevenet').keyup((ev) => {

    const value = ev.target.value;

    if( value === '' ) {
      $('#firstQuery').removeAttr('class')
      $('#resultQuery').html('')
    }else{
    
      $('#firstQuery').attr('class' , 'd-none')

      $('#resultQuery').html(`<div class="col-12" style="text-align: center">Loading ...</div>`)

      $.get(`${window.location.origin}/event/search?search=${value}` , (res) => {

        let reshtml = `<div class="row">`

        if( res.length !== 0 ) {

          res.map(val => {
            reshtml += 
            `<div class="row row-cols-1 row-cols-md-2">
                <div class="col mb-4">
                  <div class="card">
                    <img src="${window.location.origin}/foto_event/${val.foto_event}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">${val.nama_event}</h5>
                      <p class="card-text">${val.deskripsi}</p>
                      <a href="admin/detailevent/${val.id_event}" class="btn btn-secondary">View details</a>
                    </div>
                  </div>
                </div>
              </div>`
          })

        }else{

          reshtml += `<div class="col-12 text-center">Tidak ada hasil</div>`

        }


        reshtml += `</div>`

        $('#resultQuery').html(reshtml)


      })

    }

  })


  $('#searchevenet-1').keyup((ev) => {

    const value = ev.target.value;

    if( value === '' ) {
      $('#firstQuery').removeAttr('class')
      $('#resultQuery').html('')
    }else{
    
      $('#firstQuery').attr('class' , 'd-none')

      $('#resultQuery').html(`<div class="col-12" style="text-align: center">Loading ...</div>`)

      $.get(`${window.location.origin}/event/search?search=${value}&a=1` , (res) => {

        let reshtml = `<div class="row">`

        if( res.length !== 0 ) {

          res.map(val => {
            reshtml += 
            `<div class="row row-cols-1 row-cols-md-2">
                <div class="col mb-4">
                  <div class="card">
                    <img src="${window.location.origin}/foto_event/${val.foto_event}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">${val.nama_event}</h5>
                      <p class="card-text">${val.deskripsi}</p>
                      <a href="admin/detailevent/${val.id_event}" class="btn btn-secondary">View details</a>
                    </div>
                  </div>
                </div>
              </div>`
          })

        }else{

          reshtml += `<div class="col-12 text-center">Tidak ada hasil</div>`

        }


        reshtml += `</div>`

        $('#resultQuery').html(reshtml)


      })

    }

  })

});