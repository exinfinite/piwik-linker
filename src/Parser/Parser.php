<?php
namespace Exinfinite\PiwikLinker\Parser;
use function Exinfinite\Helpers\isJson;

/**
 * 訊息解析
 */
class Parser {
    //json 格式
    public static function fromJson($json_str) {
        return isJson($json_str) ? json_decode($json_str, true) : [];
    }
    public static function jsonCollectionTransform($json_collection, callable $transformer = null, array $meta = []) {
        $t = is_callable($transformer) ? $transformer : function ($item) {
            return $item;
        };
        return \Spatie\Fractalistic\Fractal::create(Parser::fromJson($json_collection))
            ->transformWith(
                is_callable($transformer) ? $transformer : function ($item) {
                    return $item;
                }
            )
            ->addMeta($meta)
            ->toJson();
    }
}