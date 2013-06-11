<?php

namespace Elemedia\Opauth;

/**
 * Wrapper for data returned from facebook oauth server
 *
 * @author Michal Svec <pan.svec@gmail.com>
 */
class FacebookIdentity extends BaseIdentity implements IOpauthIdentity 
{
	public function getProvider()
	{
		return "Facebook";
	}

	public function getName()
	{
		return $this->data['name'];
	}

	public function getImage()
	{
		return $this->data["image"];
	}

	public function getProfileUrl()
	{
		return $this->data["link"];
	}
}