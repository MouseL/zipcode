<?php

namespace PragmaRX\ZIPcode\Support;


class WebService {

	private $name;

	private $url;

	private $query;

	private $zipFormat;

	private $fields;

	private $fixedFields = [
		'zip',
		'web_service',
		'country_id',
	];

	public function __construct($service = null)
	{
		if ($service)
		{
			$this->parse($service);
		}
	}

	public function parse($webService)
	{
		$this->name = $webService['name'];

		$this->url = $webService['url'];

		$this->query = $webService['query'];

		$this->zipFormat = $webService['zip_format'];

		$this->fields = $webService['fields'];
	}

	/**
	 * @return mixed
	 */
	public function getFields()
	{
		return array_merge($this->fields, $this->fixedFields);
	}

	/**
	 * @return mixed
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @return mixed
	 */
	public function getQuery()
	{
		return $this->query;
	}

	/**
	 * @return mixed
	 */
	public function getUrl()
	{
		return $this->url;
	}

	/**
	 * @return mixed
	 */
	public function getZipFormat()
	{
		return $this->zipFormat;
	}

	public function getField($field)
	{
		return isset($this->fields[$field])
				? $this->fields[$field]
				: null;
	}
}