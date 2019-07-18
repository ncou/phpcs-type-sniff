<?php

namespace Gskema\TypeSniff\Sniffs\fixtures;

class TestClass4 extends \stdClass
{
    /**
     * @param array    $arg1
     *
     * @param callable $arg2
     * @param iterable $arg3
     * @param parent   $arg4
     * @param self     $arg5
     *
     * @param callable $arg6
     * @param \Closure $arg7
     * @param iterable $arg8
     *
     * @param callable $arg9
     * @param \Closure $arg10
     * @param iterable $arg11
     *
     * @param double   $arg12
     *
     * @param false    $arg13
     *
     * @param callable $arg14
     * @param \Closure $arg15
     * @param iterable $arg16
     * @param parent   $arg17
     *
     * @param true     $arg18
     *
     * @param int[]    $arg20
     * @param int[]    $arg21
     *
     * @return static
     */
    public function func1(
        iterable $arg1,
        //
        callable $arg2,
        iterable $arg3,
        parent $arg4,
        self $arg5,
        //
        callable $arg6,
        \Closure $arg7,
        iterable $arg8,
        //
        callable $arg9,
        \Closure $arg10,
        iterable $arg11,
        //
        float $arg12,
        //
        bool $arg13,
        //
        callable $arg14,
        \Closure $arg15,
        iterable $arg16,
        parent $arg17,
        //
        bool $arg18,
        //
        array $arg20,
        iterable $arg21
    ): self {
    }

    /**
     * @return $this
     */
    public function func2(): callable
    {
    }


    /**
     * @return $this
     */
    public function func3(): \stdClass
    {
    }

    /**
     * @return $this
     */
    public function func4(): iterable
    {
    }

    /**
     * @return $this
     */
    public function func6(): self
    {
    }
}