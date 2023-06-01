<?php

declare(strict_types=1);

/*
 * This file is part of the league/commonmark package.
 *
 * (c) Colin O'Dell <colinodell@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace League\CommonMark\Parser;

<<<<<<< HEAD
use League\CommonMark\Exception\CommonMarkException;
=======
>>>>>>> origin/coba
use League\CommonMark\Node\Block\Document;

interface MarkdownParserInterface
{
    /**
<<<<<<< HEAD
     * @throws CommonMarkException
=======
     * @throws \RuntimeException
>>>>>>> origin/coba
     */
    public function parse(string $input): Document;
}
