<?
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/catalog/general/measure_ratio.php");

class CCatalogMeasureRatio
	extends CCatalogMeasureRatioAll
{
	function add($arFields)
	{
		global $DB;
		if(!self::CheckFields('ADD',$arFields))
			return false;

		$arInsert = $DB->PrepareInsert("b_catalog_measure_ratio", $arFields);
		$strSql = "insert into b_catalog_measure_ratio (".$arInsert[0].") values(".$arInsert[1].")";

		$res = $DB->Query($strSql, true, "File: ".__FILE__."<br>Line: ".__LINE__);
		if(!$res)
			return false;
		$lastId = intval($DB->LastID());
		return $lastId;
	}

	function getList($arOrder = array(), $arFilter = array(), $arGroupBy = false, $arNavStartParams = false, $arSelectFields = array())
	{
		global $DB;
		if (empty($arSelectFields))
			$arSelectFields = array("ID", "PRODUCT_ID", "RATIO");
		$arFields = array(
			"ID" => array("FIELD" => "MR.ID", "TYPE" => "int"),
			"PRODUCT_ID" => array("FIELD" => "MR.PRODUCT_ID", "TYPE" => "int"),
			"RATIO" => array("FIELD" => "MR.RATIO", "TYPE" => "double"),
		);
		$arSqls = CCatalog::PrepareSql($arFields, $arOrder, $arFilter, $arGroupBy, $arSelectFields);
		$arSqls["SELECT"] = str_replace("%%_DISTINCT_%%", "", $arSqls["SELECT"]);

		if (empty($arGroupBy) && is_array($arGroupBy))
		{
			$strSql = "select ".$arSqls["SELECT"]." from b_catalog_measure_ratio MR ".$arSqls["FROM"];
			if (!empty($arSqls["WHERE"]))
				$strSql .= " where ".$arSqls["WHERE"];
			if (!empty($arSqls["GROUPBY"]))
				$strSql .= " group by ".$arSqls["GROUPBY"];

			$dbRes = $DB->Query($strSql, false, "File: ".__FILE__."<br>Line: ".__LINE__);
			if ($arRes = $dbRes->Fetch())
				return $arRes["CNT"];
			else
				return false;
		}

		$strSql = "select ".$arSqls["SELECT"]." from b_catalog_measure_ratio MR ".$arSqls["FROM"];
		if (!empty($arSqls["WHERE"]))
			$strSql .= " where ".$arSqls["WHERE"];
		if (!empty($arSqls["GROUPBY"]))
			$strSql .= " group by ".$arSqls["GROUPBY"];
		if (!empty($arSqls["ORDERBY"]))
			$strSql .= " order by ".$arSqls["ORDERBY"];

		$intTopCount = 0;
		$boolNavStartParams = (!empty($arNavStartParams) && is_array($arNavStartParams));
		if ($boolNavStartParams && isset($arNavStartParams['nTopCount']))
		{
			$intTopCount = intval($arNavStartParams["nTopCount"]);
		}
		if ($boolNavStartParams && 0 >= $intTopCount)
		{
			$strSql_tmp = "select COUNT('x') as CNT FROM b_catalog_measure_ratio MR ".$arSqls["FROM"];
			if (!empty($arSqls["WHERE"]))
				$strSql_tmp .= " where ".$arSqls["WHERE"];
			if (!empty($arSqls["GROUPBY"]))
				$strSql_tmp .= " group by ".$arSqls["GROUPBY"];

			$dbRes = $DB->Query($strSql_tmp, false, "File: ".__FILE__."<br>Line: ".__LINE__);
			$cnt = 0;
			if (empty($arSqls["GROUPBY"]))
			{
				if ($arRes = $dbRes->Fetch())
					$cnt = $arRes["CNT"];
			}
			else
			{
				$cnt = $dbRes->SelectedRowsCount();
			}

			$dbRes = new CDBResult();

			$dbRes->NavQuery($strSql, $cnt, $arNavStartParams);
		}
		else
		{
			if ($boolNavStartParams && 0 < $intTopCount)
			{
				$strSql .= " limit ".$intTopCount;
			}
			$dbRes = $DB->Query($strSql, false, "File: ".__FILE__."<br>Line: ".__LINE__);
		}
		return $dbRes;
	}
}