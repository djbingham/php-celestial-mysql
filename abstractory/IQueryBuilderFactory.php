<?php
namespace PHPMySql\Abstractory;

interface IQueryBuilderFactory
{
	/**
	 * @return IQueryFactory
	 */
	public function query();

	/**
	 * @return IValueFactory
	 */
	public function value();
}