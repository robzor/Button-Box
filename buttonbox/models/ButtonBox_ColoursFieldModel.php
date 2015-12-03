<?php
namespace Craft;

/**
 * ButtonBox_Colours by Supercool
 *
 * @package   ButtonBox
 * @author    Josh Angell
 * @copyright Copyright (c) 2014, Supercool Ltd
 * @link      http://www.supercooldesign.co.uk
 */

class ButtonBox_ColoursFieldModel extends BaseModel
{

	protected $cssColour;
	protected $label;

	public function getExtraAttributes($options, $colourSlug)
	{
		foreach ($options as $key => $sub) {
			if ($sub['value'] == $colourSlug) {
				$this->label = $sub['label'];
				$this->cssColour = $sub['cssColour'];
			}
		}
	}

	public function defineAttributes()
	{
		return array(
			'value' => AttributeType::String,
		);
	}
}