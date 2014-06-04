<?php

namespace DP\Core\CoreBundle\Model;

interface ServerInterface
{
    /**
     * Is the server installation ended ?
     *
     * @return boolean
     */
    public function isInstallationEnded();

    /**
     * Fetch the installation progress
     *
     * @return integer
     */
    public function getInstallationProgress();

    /**
     * Set the installation status in database
     *
     * @param integer $status
     * @return integer
     */
    public function setInstallationStatus($status);

    /**
     * Get the installation status in database
     *
     * @return integer
     */
    public function getInstallationStatus();

    /**
     * Launch the installation process
     *
     * @param \Twig_Environment $twig
     * @throws DP\Core\CoreBundle\Exception\MissingPacketException
     * @throws DP\Core\CoreBundle\Exception\InstallAlreadyStartedException
     * @throws Dedipanel\PHPSeclibWrapperBundle\Connection\Exception\ConnectionErrorException
     */
    public function installServer(\Twig_Environment $twig);
}