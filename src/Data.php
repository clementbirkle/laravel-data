<?php

namespace Spatie\LaravelData;

use Illuminate\Contracts\Support\Responsable;
use Spatie\LaravelData\Concerns\AppendableData;
use Spatie\LaravelData\Concerns\BaseData;
use Spatie\LaravelData\Concerns\ContextableData;
use Spatie\LaravelData\Concerns\EmptyData;
use Spatie\LaravelData\Concerns\IncludeableData;
use Spatie\LaravelData\Concerns\ResponsableData;
use Spatie\LaravelData\Concerns\TransformableData;
use Spatie\LaravelData\Concerns\ValidateableData;
use Spatie\LaravelData\Concerns\WrappableData;
use Spatie\LaravelData\Concerns\ComparableData;
use Spatie\LaravelData\Contracts\AppendableData as AppendableDataContract;
use Spatie\LaravelData\Contracts\BaseData as BaseDataContract;
use Spatie\LaravelData\Contracts\ContextableData as ContextableDataContract;
use Spatie\LaravelData\Contracts\EmptyData as EmptyDataContract;
use Spatie\LaravelData\Contracts\IncludeableData as IncludeableDataContract;
use Spatie\LaravelData\Contracts\ResponsableData as ResponsableDataContract;
use Spatie\LaravelData\Contracts\TransformableData as TransformableDataContract;
use Spatie\LaravelData\Contracts\ValidateableData as ValidateableDataContract;
use Spatie\LaravelData\Contracts\WrappableData as WrappableDataContract;
use Spatie\LaravelData\Contracts\ComparableData as ComparableDataContract;

abstract class Data implements Responsable, AppendableDataContract, BaseDataContract, TransformableDataContract, ContextableDataContract, IncludeableDataContract, ResponsableDataContract, ValidateableDataContract, WrappableDataContract, EmptyDataContract, ComparableDataContract
{
    use ResponsableData;
    use IncludeableData;
    use AppendableData;
    use ValidateableData;
    use WrappableData;
    use TransformableData;
    use BaseData;
    use EmptyData;
    use ContextableData;
    use ComparableData;
}
