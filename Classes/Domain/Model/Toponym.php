<?php

namespace Digicademy\ChfGeo\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2017 Torsten Schrade <Torsten.Schrade@adwmainz.de>, Academy of Sciences and Literature | Mainz
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Toponym extends AbstractEntity
{

    /**
     * name
     *
     * @var \string
     *
     */
    protected $name;

    /**
     * label
     *
     * @var \string
     *
     */
    protected $label;

    /**
     * certainty
     *
     * @var \integer
     *
     */
    protected $certainty;

    /**
     * name
     *
     * @var \integer
     *
     */
    protected $historical;

    /**
     * featurecode
     *
     * @var \Digicademy\ChfGeo\Domain\Model\Featurecode $featurecode
     * @lazy
     *
     */
    protected $featurecode;

    /**
     * coordinates
     *
     * @var \Digicademy\ChfGeo\Domain\Model\Coordinates $coordinates
     * @lazy
     *
     */
    protected $coordinates;

    /**
     * toponym
     *
     * @var \Digicademy\ChfGeo\Domain\Model\Toponym $parent
     * @lazy
     *
     */
    protected $parent;

    /**
     * Sets the name
     *
     * @param \string $name
     *
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the name
     *
     * @return \string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the label
     *
     * @param \string $label
     *
     * @return void
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * Returns the label
     *
     * @return \string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Sets the certainty
     *
     * @param \integer $certainty
     *
     * @return void
     */
    public function setCertainty($certainty)
    {
        $this->certainty = $certainty;
    }

    /**
     * Returns the certainty
     *
     * @return \integer
     */
    public function getCertainty()
    {
        return $this->certainty;
    }

    /**
     * Sets the historical
     *
     * @param \integer $historical
     *
     * @return void
     */
    public function setHistorical($historical)
    {
        $this->historical = $historical;
    }

    /**
     * Returns the historical
     *
     * @return \integer
     */
    public function getHistorical()
    {
        return $this->historical;
    }

    /**
     * getFeaturecode
     *
     * @return \Digicademy\ChfGeo\Domain\Model\Featurecode $featurecode
     */
    public function getFeaturecode()
    {
        return $this->featurecode;
    }

    /**
     * setFeaturecode
     *
     * @param \Digicademy\ChfGeo\Domain\Model\Featurecode $featurecode
     *
     * @return void
     */
    public function setFeaturecode(Featurecode $featurecode)
    {
        $this->featurecode = $featurecode;
    }

    /**
     * getCoordinates
     *
     * @return \Digicademy\ChfGeo\Domain\Model\Coordinates $coordinates
     */
    public function getCoordinates()
    {
        return $this->coordinates;
    }

    /**
     * setCoordinates
     *
     * @param \Digicademy\ChfGeo\Domain\Model\Coordinates $coordinates
     *
     * @return void
     */
    public function setCoordinates(Coordinates $coordinates)
    {
        $this->coordinates = $coordinates;
    }

    /**
     * getParent
     *
     * @return \Digicademy\ChfGeo\Domain\Model\Toponym $parent
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * setParent
     *
     * @param \Digicademy\ChfGeo\Domain\Model\Toponym $parent
     *
     * @return void
     */
    public function setParent(Toponym $parent)
    {
        $this->parent = $parent;
    }

}
