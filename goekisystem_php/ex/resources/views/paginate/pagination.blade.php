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
    @if (isset($data) && $data->lastPage() > 1)
        @if($data->currentPage() != 1 && $data->lastPage() >= 5)
            <li>
                <a href="{{ $data->url($data->url(1)) }}" aria-label="Previous">
                    <span aria-hidden="true">«</span>
                </a>
            </li>
        @endif
        @if($data->currentPage() != 1)
            <li>
                <a href="{{ $data->url($data->currentPage()-1) }}" aria-label="Previous" class="previous">
                    <span aria-hidden="true">‹</span>
                </a>
            </li>
        @endif
        @for($i = max($data->currentPage()-2, 1); $i <= min(max($data->currentPage()-2, 1)+4,$data->lastPage()); $i++)
            @if($data->currentPage() == $i)
                <li class="active">
            @else
                <li>
            @endif
                <a href="{{ $data->url($i) }}">{{ $i }}</a>
            </li>
        @endfor
        @if ($data->currentPage() != $data->lastPage())
            <li>
                <a href="{{ $data->url($data->currentPage()+1) }}" aria-label="Next" class="next">
                    <span aria-hidden="true"> › </span>
                </a>
            </li>
        @endif
        @if ($data->currentPage() != $data->lastPage() && $data->lastPage() >= 5)
            <li>
                <a href="{{ $data->url($data->lastPage()) }}" aria-label="Next">
                    <span aria-hidden="true">»</span>
                </a>
            </li>
        @endif
    @endif
</ul>
