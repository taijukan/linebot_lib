<?php

/**
 * 
 */

namespace LINE\LINEBot\MessageBuilder\FlexBuilder;


/**
 * A builder class for button template message.
 *
 * @package LINE\LINEBot\MessageBuilder\TemplateBuilder
 */
class BubbleBuilder
{
	/** テキストの書字方向および水平ボックス内のコンポーネントの並び順 */
	private $direction;
	/** ヘッダーブロック。ボックスコンポーネントを指定します。 */
	private $header;
	/** ヒーローブロック。画像コンポーネントを指定します。 */
	private $hero;
	/** ボディブロック。ボックスコンポーネントを指定します。 */
	private $body;
	/** フッターブロック。ボックスコンポーネントを指定します。 */
	private $footer;
	/** 各ブロックのスタイル。バブルスタイルオブジェクトを指定します。 */
	private $styles;


	private $template;

	
	public function __construct($direction,$hero,$body,$footer,$styles)
	{
		$this->direction = $direction;
		$this->header = $hero;
		$this->body = $body;
		$this->footer = $footer;
		$this->styles = $styles;
	}

	/**
	 * Builds button template message structure.
	 *
	 * @return array
	 */
	public function buildTemplate()
	{
		$this->template['type'] = "bubble";

		if (!empty($this->direction)) {
			$this->template['direction'] = $this->direction;
		}

		if (!empty($this->header)) {
			$this->template['header'] = $this->header;
		}

		if (!empty($this->hero)) {
			$this->template['hero'] = $this->hero;
		}

		if (!empty($this->body)) {
			$this->template['body'] = $this->body;
		}

		if (!empty($this->footer)) {
			$this->template['footer'] = $this->footer;
		}

		if (!empty($this->styles)) {
			$this->template['styles'] = $this->styles;
		}



		return $this->template;
	}
}
