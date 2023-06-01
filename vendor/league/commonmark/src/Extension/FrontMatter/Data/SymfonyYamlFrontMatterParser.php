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

namespace League\CommonMark\Extension\FrontMatter\Data;

<<<<<<< HEAD
use League\CommonMark\Exception\MissingDependencyException;
=======
>>>>>>> origin/coba
use League\CommonMark\Extension\FrontMatter\Exception\InvalidFrontMatterException;
use Symfony\Component\Yaml\Exception\ParseException;
use Symfony\Component\Yaml\Yaml;

final class SymfonyYamlFrontMatterParser implements FrontMatterDataParserInterface
{
    /**
     * {@inheritDoc}
     */
    public function parse(string $frontMatter)
    {
        if (! \class_exists(Yaml::class)) {
<<<<<<< HEAD
            throw new MissingDependencyException('Failed to parse yaml: "symfony/yaml" library is missing');
=======
            throw new \RuntimeException('Failed to parse yaml: "symfony/yaml" library is missing');
>>>>>>> origin/coba
        }

        try {
            return Yaml::parse($frontMatter);
        } catch (ParseException $ex) {
            throw InvalidFrontMatterException::wrap($ex);
        }
    }
}
