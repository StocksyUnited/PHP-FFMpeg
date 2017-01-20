<?php

/*
 * This is an additional filter for stripping audio from the output entirely.
 *
 * Author: Daniel Ross
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FFMpeg\Filters\Video;

use FFMpeg\Filters\FilterInterface;
use FFMpeg\Format\VideoInterface;
use FFMpeg\Media\Video;

class StripAudioFilter implements VideoFilterInterface
{
    public function __construct()
    {
    }

    public function getPriority()
    {
        return 0;
    }

    /**
     * {@inheritdoc}
     */
    public function apply(Video $video, VideoInterface $format)
    {
        return ['-an'];
    }
}