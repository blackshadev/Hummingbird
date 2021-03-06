<?php

declare(strict_types=1);

namespace JeroenG\Hummingbird\Tests\Unit;

use JeroenG\Hummingbird\Domain\Element;
use PHPUnit\Framework\TestCase;

final class ElementTest extends TestCase
{
    public function test_it_can_verify_if_the_html_contains_a_tag(): void
    {
        $element = new Element(
            '<h1 class="test">Welcome to my website</h1>',
            'Welcome to my website',
            ['class' => 'test']
        );

        self::assertSame('<h1 class="test">Welcome to my website</h1>', $element->getHtml());
        self::assertSame('test', $element->getAttribute('class'));
        self::assertSame([ 'class' => 'test' ], $element->getAttributes());
        self::assertTrue($element->contains('h1'));
        self::assertTrue($element->contains('my'));
    }
}
