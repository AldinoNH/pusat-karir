$(document).ready(function () {
  $('#searchlowongan').keyup((ev) => {

    const value = ev.target.value;

    if( value === '' ) {
      $('#firstQuery').removeAttr('class')
      $('#resultQuery').html('')
    }else{
    
      $('#firstQuery').attr('class' , 'd-none')

      $('#resultQuery').html(`<div class="col-12" style="text-align: center">Loading ...</div>`)

      $.get(`${window.location.origin}/lowonganarsip/search?search=${value}` , (res) => {

        let reshtml = `<div class="row">`

        if( res.length !== 0 ) {

          res.map(val => {
            reshtml += 
            `<div class="row col-md-4 py-3">
                <div class="col mb-4">
                  <div class="card">
                    <img src="${window.location.origin}/foto/${val.foto}" class="img-thumbnail">
                    <div class="card-body">
                      <h5 class="card-title">${val.judul_lowongan}</h5>
                      <p class="card-text">${val.deskripsi}</p>
                      <a href="admin/detailevent/${val.id_lowongan}" class="btn btn-secondary">View details</a>
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