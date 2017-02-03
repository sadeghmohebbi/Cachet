<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Events\IncidentUpdate;

use CachetHQ\Cachet\Models\IncidentUpdate;

/**
 * This is the incident update was updated event.
 *
 * @author James Brooks <james@alt-three.com>
 */
final class IncidentUpdateWasUpdatedEvent implements IncidentUpdateEventInterface
{
    /**
     * The incident update that has been updated.
     *
     * @var \CachetHQ\Cachet\Models\IncidentUpdate
     */
    public $update;

    /**
     * Create a new incident update was updated event instance.
     *
     * @param \CachetHQ\Cachet\Models\IncidentUpdate $update
     *
     * @return void
     */
    public function __construct(IncidentUpdate $update)
    {
        $this->update = $update;
    }

    /**
     * Get the event description.
     *
     * @return string
     */
    public function __toString()
    {
        return 'Incident Update was updated.';
    }
}
