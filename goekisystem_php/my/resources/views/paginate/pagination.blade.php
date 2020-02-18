<?php
/**
 * Created by PhpStorm.
 * User: GaCold
 * Date: 10/20/2018
 * Time: 10:23 AM
 */
?>
<?php
/**
 * Created by PhpStorm.
 * User: GaCold
 * Date: 10/10/2018
 * Time: 5:06 CH
 */
?>

<ul class="pagination text-center">
    @if (isset($data) && $data['pagecnt'] > 1)
        @if($_GET['page'] != 1 && $data['pagecnt'] >= 5)
            <li>
                <a href="{{url('/?page=1') }}" aria-label="Previous">
                    <span aria-hidden="true">«</span>
                </a>
            </li>
        @endif
        @if($_GET['page'] != 1)
            <li>
                <a href="{{url('/?page='.$_GET['page']-1) }}" aria-label="Previous" class="previous">
                    <span aria-hidden="true">‹</span>
                </a>
            </li>
        @endif
        @for($i = max($_GET['page']-2, 1); $i <= min(max($_GET['page']-2, 1)+4,$data['pagecnt']); $i++)
            @if($_GET['page'] == $i)
                <li class="active">
            @else
                <li>
            @endif
                <a href="{{url('/?page='.$i)}}">{{ $i }}</a>
            </li>
        @endfor
        @if ($_GET['page'] != $data['pagecnt'])
            <li>
                <a href="{{url('/?page='.($_GET['page']+1))}}" aria-label="Next" class="next">
                    <span aria-hidden="true"> › </span>
                </a>
            </li>
        @endif
        @if ($_GET['page'] != $data['pagecnt'] && $data['pagecnt'] >= 5)
            <li>
                <a href="{{url('/?page='.$data['pagecnt'])}}" aria-label="Next">
                    <span aria-hidden="true">»</span>
                </a>
            </li>
        @endif
    @endif
</ul>
