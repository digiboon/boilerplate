<?php

class App extends Framework {

	/**
	 * Compose template partials.
	 *
	 * @return array
	 */
	public function getTemplatePartials(): array
	{
		return  [
			'header',
			'footer'
		];
	}

	/**
	 * Compose template helpers.
	 *
	 * @return array
	 */
	public function getTemplateHelpers(): array
	{
		return [
			'field' => function($id, $key) {

				if(function_exists('get_field')) {

					return get_field($key, $id);

				}

			}
		];
	}

	/**
	 * Return global template data.
	 *
	 * @return array
	 */
	public function getTemplateData(): array
	{
		return [];
	}

	/**
	 * Requires the actions file.
	 */
	public function action(): void
	{
		$app = $this;

		if(file_exists(__DIR__ . '/actions.php')) {

			require __DIR__ . '/actions.php';

		}
	}

	/**
	 * Requires the routes file.
	 */
	public function route(): void
	{
		$app = $this;

		if(file_exists(__DIR__ . '/routes.php')) {

			require __DIR__ . '/routes.php';

		}
	}
}