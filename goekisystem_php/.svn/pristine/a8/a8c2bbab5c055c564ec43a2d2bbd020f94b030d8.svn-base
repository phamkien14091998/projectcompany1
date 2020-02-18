
@foreach($data['item'] as $row)
    <?php if($row['delivery_date']== []){
        $row['delivery_date']="";
    }?>

<tr class="table-content" >
    <td class="row-copy" style=" text-align: center"><input type="checkbox"></td>
    <td style="text-align: center; display: inline-block" ><p>{{$row['delivery_date']}}</p></td>
    <td style="text-align: center;" ><p>{{$row['rieki']}}</p></td>
    <td style="text-align: center;" ><p>{{$row['yama_sagaku']}}</p></td>
    <td style="text-align: center;" ><p>{{$row['hurikomi']}}</p></td>
    <td style="text-align: center;" ><p>{{$row['all_price']}}</p></td>
    <td style="text-align: center;" ><p>{{$row['delivery_decimal9']}}</p></td>
    <td style="text-align: center;" ><p>{{$row['delivery_decimal10']}}<p></td>
    <td style="text-align: center;" ><p>{{$row['all_back_price']}}<p></td>
    <td style="text-align: center;" ><p>{{$row['course_price']}}<p></td>
    <td style="text-align: center;" ><p>{{$row['course_back_price']}}<p></td>
    <td style="text-align: center;" ><p>{{$row['delivery_decimal12']}}<p></td>
    <td style="text-align: center;" ><p>{{$row['delivery_decimal1']}}<p></td>
    <td style="text-align: center;" ><p>{{$row['delivery_decimal2']}}<p></td>
    <td style="text-align: center;" ><p>{{$row['delivery_decimal3']}}<p></td>
    <td style="text-align: center;" ><p>{{$row['delivery_decimal4']}}<p></td>
    <td style="text-align: center;" ><p>{{$row['delivery_decimal5']}}<p></td>
    <td style="text-align: center;" ><p>{{$row['delivery_decimal6']}}<p></td>
    <td style="text-align: center;" ><p>{{$row['delivery_decimal7']}}<p></td>
    <td style="text-align: center;" ><p>{{$row['delivery_text15']}}<p></td>
    <td style="text-align: center;" ><p>{{$row['delivery_text16']}}<p></td>
    <td style="text-align: center;" ><p>{{$row['cashtotal']}}<p></td>
    <td style="text-align: center;" ><p>{{$row['delivery_text17']}}<p></td>
    <td style="text-align: center;" ><p>{{$row['delivery_decimal8']}}<p></td>
    <td style="text-align: center;" ><p>{{$row['delivery_decimal13']}}<p></td>

</tr>
@endforeach
<script>
    let tmpElement = $('<textarea style="opacity:0;"></textarea>');
    $(".row-copy").on("change",function () {
        let parent = $(this).closest('td').siblings().each(function(){
                tmpElement.text(tmpElement.text() + $(this).text() + '\t');
        });
        tmpElement.text(tmpElement.text()+ '\n');
        tmpElement.appendTo($('body')).focus().select();
        document.execCommand("copy");
        // tmpElement.remove();
    });
    const elTable = document.querySelector('table');
    const copyEl = (elToBeCopied) => {
        let range, sel;

        // Ensure that range and selection are supported by the browsers
        if (document.createRange && window.getSelection) {

            range = document.createRange();
            sel = window.getSelection();
            // unselect any element in the page
            sel.removeAllRanges();

            try {
                range.selectNodeContents(elToBeCopied);
                sel.addRange(range);
            } catch (e) {
                range.selectNode(elToBeCopied);
                sel.addRange(range);
            }

            document.execCommand('copy');
        }

        sel.removeAllRanges();

        console.log('Element Copied! Paste it in a file')
    };
    $('.coppy.all').on('click',function(){
        $(".row-copy").css('display','none');
        copyEl(elTable);
        location.reload();
    });
</script>
