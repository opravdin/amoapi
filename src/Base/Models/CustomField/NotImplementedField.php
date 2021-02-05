<?php
/**
 * amoCRM Entity custom field, which is not implemented yet
 */
namespace Ufee\Amo\Base\Models\CustomField;

use Exception;

class NotImplementedField extends EntityField
{
    public function throwNotImplementedException() {
        $error = 'Trying to manipulate unknown CF type: '.$this->field_type;
        $error = "\nTry to upgrade library to newer version";
        throw new \Exception($error);
    }

    /**
     * Get single value
     * @throws Exception
     */
    public function getValue()
    {
		$this->throwNotImplementedException();
	}

    /**
     * Get cf values
     * @throws Exception
	 * @return array
     */
    public function getValues()
    {
        $this->throwNotImplementedException();
    }

    /**
     * Set cf values
     * @throws Exception
	 * @param mixed $value value
     */
    public function setValue($value)
    {
		$this->throwNotImplementedException();
	}

    /**
     * Reset cf value
     * @throws Exception
     */
    public function reset()
    {
		$this->throwNotImplementedException();
	}
}