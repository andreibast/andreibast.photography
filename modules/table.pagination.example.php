<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class = "container" style="margin-top:35px">
    <h4>Select Number of Rows</h4>
    <div class="form-group">
        <select name="state" id="maxRows" class="form-control" style="width:150px;">
            <option value="5000">Show All</option>
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="20">20</option>
            <option value="50">50</option>
            <option value="100">100</option>
            
        </select>
    </div>

<table class="table table-bordered table-striped">
    <thead><!--table header-->
        <tr>        <th>Name</th>        <th>Email</th>        <th>Phone</th>        <th>Address</th>    </tr>
    </thead>
    <tbody>
        <!--table rows-->
        <tr>        <td>Andrei A</td>        <td>andrei@example.com</td>        <td>12345678910</td>        <td>Timisoara</td>    </tr>
        <tr>        <td>Andrei A</td>        <td>andrei@example.com</td>        <td>12345678910</td>        <td>Timisoara</td>    </tr>
        <tr>        <td>Andrei A</td>        <td>andrei@example.com</td>        <td>12345678910</td>        <td>Timisoara</td>    </tr>
        <tr>        <td>Andrei A</td>        <td>andrei@example.com</td>        <td>12345678910</td>        <td>Timisoara</td>    </tr>
        <tr>        <td>Andrei A</td>        <td>andrei@example.com</td>        <td>12345678910</td>        <td>Timisoara</td>    </tr>
        <tr>        <td>Andrei A</td>        <td>andrei@example.com</td>        <td>12345678910</td>        <td>Timisoara</td>    </tr>
        <tr>        <td>Andrei A</td>        <td>andrei@example.com</td>        <td>12345678910</td>        <td>Timisoara</td>    </tr>
        <tr>        <td>Andrei A</td>        <td>andrei@example.com</td>        <td>12345678910</td>        <td>Timisoara</td>    </tr>
        <tr>        <td>Andrei A</td>        <td>andrei@example.com</td>        <td>12345678910</td>        <td>Timisoara</td>    </tr>
        <tr>        <td>Andrei A</td>        <td>andrei@example.com</td>        <td>12345678910</td>        <td>Timisoara</td>    </tr>
        <tr>        <td>Andrei A</td>        <td>andrei@example.com</td>        <td>12345678910</td>        <td>Timisoara</td>    </tr>
        <tr>        <td>Andrei A</td>        <td>andrei@example.com</td>        <td>12345678910</td>        <td>Timisoara</td>    </tr>
        <tr>        <td>Andrei A</td>        <td>andrei@example.com</td>        <td>12345678910</td>        <td>Timisoara</td>    </tr>
        <tr>        <td>Andrei A</td>        <td>andrei@example.com</td>        <td>12345678910</td>        <td>Timisoara</td>    </tr>
        <tr>        <td>Andrei A</td>        <td>andrei@example.com</td>        <td>12345678910</td>        <td>Timisoara</td>    </tr>
        <tr>        <td>Andrei A</td>        <td>andrei@example.com</td>        <td>12345678910</td>        <td>Timisoara</td>    </tr>
        <tr>        <td>Andrei A</td>        <td>andrei@example.com</td>        <td>12345678910</td>        <td>Timisoara</td>    </tr>
        <tr>        <td>Andrei A</td>        <td>andrei@example.com</td>        <td>12345678910</td>        <td>Timisoara</td>    </tr>
        <tr>        <td>Andrei A</td>        <td>andrei@example.com</td>        <td>12345678910</td>        <td>Timisoara</td>    </tr>
        <tr>        <td>Andrei A</td>        <td>andrei@example.com</td>        <td>12345678910</td>        <td>Timisoara</td>    </tr>
        <tr>        <td>Andrei A</td>        <td>andrei@example.com</td>        <td>12345678910</td>        <td>Timisoara</td>    </tr>
        <tr>        <td>Andrei A</td>        <td>andrei@example.com</td>        <td>12345678910</td>        <td>Timisoara</td>    </tr>
        <tr>        <td>Andrei A</td>        <td>andrei@example.com</td>        <td>12345678910</td>        <td>Timisoara</td>    </tr>
        <tr>        <td>Andrei A</td>        <td>andrei@example.com</td>        <td>12345678910</td>        <td>Timisoara</td>    </tr>
        <tr>        <td>Andrei A</td>        <td>andrei@example.com</td>        <td>12345678910</td>        <td>Timisoara</td>    </tr>
        <tr>        <td>Andrei A</td>        <td>andrei@example.com</td>        <td>12345678910</td>        <td>Timisoara</td>    </tr>
        <tr>        <td>Andrei Bast</td>     <td>andreib@example2.com</td>      <td>12365326678910</td>     <td>Iasi</td>         </tr>
    </tbody>
</table>

    <div class="pagination-container">
        <nav>
            <ul class="pagination">
            </ul>
        </nav>
    </div>



</div>

<script src="js/jquery-3.5.0.js"></script>
<script src="js/bootstrap.min.js"></script>

<script>
    var table = '#mytable'
    $('#maxRows').on('change', function(){
        $('.pagination').html('')
        var trnum = 0
        var maxRows = parseInt($(this).val())
        var totalRows = $(table+ ' tbody tr').length
        $(table+' tr:gt(0)').each(function(){
            trnum++
            if(trnum > maxRows){
                $(this).hide()
            }
            if(trnum <= maxRows){
                $(this).show()
            }
    })

    if(totalRows > maxRows){
        var pagenum = Math.ceil(totalRows/maxRows)
        for(var i=1; i<=pagenum;){
            $('pagination').append('<li data-page=>"'+i+'">\<span>' + i++ + '<span class="sr-only"> (current)</span></span>\</li>').show()
        }
    }

    $('.pagination li:first-child').addClass('active')
    $('pagination li').on('click', function(){
        var pageNum = $(this).attr('data-page')
        var trIndex = 0;
        $('.pagination li').removeClass('active')
        $(this).addClass('active')
        $(table+' tr:gt(0)').each(function(){
            trIndex++
            if(trIndex > (maxRows*pageNum) || trIndex <= ((maxRows*pageNum)-maxRows)){
                $(this).hide()
            }else{
                $(this).show()
            }
        })
    })
})

$(function(){
    $('table tr:eq(0)').prepend('<th>ID</th>')
    var id = 0;
    $('table tr:gt(0)').each(function(){
        id++
        $(this).prepend('<td>'+id+'</td>')
    })
})


</script>
</body>
</html>


