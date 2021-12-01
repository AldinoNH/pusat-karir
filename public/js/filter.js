$(document).ready(function () {

  let query = new URL(`${window.location.origin}/lowongan/filter?`);

  function setfiltertext() { 

    const searchparams = query.searchParams.toString()
    const textFilter = $('#text-filter');

    let textResult = ''

    if( searchparams !== "" ) {

      if( query.searchParams.has('search') ) {
        textResult += ` Cari: ${query.searchParams.get('search')} >`
      }

      if( query.searchParams.has('posisi') ) {
        textResult += ` Posisi: ${query.searchParams.get('posisi')} >`
      }

      if( query.searchParams.has('industri') ){
        textResult += ` Industri: ${query.searchParams.get('industri')} >`
      }

    }

    textFilter.text(textResult.slice(0 , -1))

  }

  setfiltertext()

  $('#list-kategori-posisi button').on('click', function (event) {
    
    var list = $(event.target)
    const kategori = list.data('kategori')

    if( kategori === 'Semua Kategori' ) {
      query.searchParams.delete('posisi')
      $('#firstquery').removeAttr('class')
      $('#searchresult').html('')
    }else{
      query.searchParams.set('posisi' , kategori)
    }

    $.get(query.toString() , (res) => {
          
      $('#firstquery').attr('class' , 'd-none')

      $('#searchresult').html(`<div class="col-12" style="text-align: center">Loading ...</div>`)

      let reshtml = `<div class="row">`

      if( res.length !== 0 ) {

        res.map(val => {
          reshtml += 
          `<div class="col-md-4 item-lowongan">
            <img class="content img-thumbnail mx-auto d-block" src="${window.location.origin}/foto/${val.foto}" width="100px">
            <h2 class="text-center">${val.judul_lowongan}</h2>
            <p class="text-center">Deskripsi Pekerjaan Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt eum velit tempore maxime? Quia nisi, suscipit vitae amet aliquid saepe!</p>
            <p><a class="btn btn-secondary col-md-12" href="admin/detail/${val.id_lowongan}">View details &raquo;</a></p>
          </div>`
        })

      }else{

        reshtml += `<div class="col-12 text-center">Tidak ada hasil</div>`

      }


      reshtml += `</div>`

      $('#searchresult').html(reshtml)


      setfiltertext()


  })
    

  })

  $('#list-kategori-industri button').on('click', function (event) {
    
    var list = $(event.target)
    const kategori = list.data('kategori')
    
    if( kategori === 'Semua Industri' ) {
      query.searchParams.delete('industri')
      $('#firstquery').removeAttr('class')
      $('#searchresult').html('')
    }else{
      query.searchParams.set('industri' , kategori)
    }

      $.get(query.toString() , (res) => {
            
        $('#firstquery').attr('class' , 'd-none')

        $('#searchresult').html(`<div class="col-12" style="text-align: center">Loading ...</div>`)

        let reshtml = `<div class="row">`

        if( res.length !== 0 ) {

          res.map(val => {
            reshtml += 
            `<div class="col-md-4 item-lowongan">
              <img class="content img-thumbnail mx-auto d-block" src="${window.location.origin}/foto/${val.foto}" width="100px">
              <h2 class="text-center">${val.judul_lowongan}</h2>
              <p class="text-center">Deskripsi Pekerjaan Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt eum velit tempore maxime? Quia nisi, suscipit vitae amet aliquid saepe!</p>
              <p><a class="btn btn-secondary col-md-12" href="admin/detail/${val.id_lowongan}">View details &raquo;</a></p>
            </div>`
          })

        }else{

          reshtml += `<div class="col-12 text-center">Tidak ada hasil</div>`

        }


        reshtml += `</div>`

        $('#searchresult').html(reshtml)
        
        setfiltertext()

    })


  })
  
  $('#search-lowongan').keyup((ev) => {

    const value = ev.target.value
    if( value === '' ) {
      query.searchParams.delete('search')
      $('#firstquery').removeAttr('class')
      $('#searchresult').html('')
      setfiltertext()
    }else{
      query.searchParams.set('search' , value)
    }

    $('#firstquery').attr('class' , 'd-none')

    $('#searchresult').html(`<div class="col-12" style="text-align: center">Loading ...</div>`)

    $.get(query.toString() , (res) => {

      let reshtml = `<div class="row">`

      if( res.length !== 0 ) {

        res.map(val => {
          reshtml += 
          `<div class="col-md-4 item-lowongan">
              <img class="content img-thumbnail mx-auto d-block" src="${window.location.origin}/foto/${val.foto}" width="100px">
              <h2 class="text-center">${val.judul_lowongan}</h2>
              <p class="text-center">Deskripsi Pekerjaan Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt eum velit tempore maxime? Quia nisi, suscipit vitae amet aliquid saepe!</p>
              <p><a class="btn btn-secondary col-md-12" href="admin/detail/${val.id_lowongan}">View details &raquo;</a></p>
            </div>`
        })

      }else{

        reshtml += `<div class="col-12 text-center">Tidak ada hasil</div>`

      }


      reshtml += `</div>`

      $('#searchresult').html(reshtml)

      setfiltertext()


    })
  })

});