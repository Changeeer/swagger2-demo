<?php
class Test
{
	/**
	 * @SWG\Get(
	 *     path="/swagger/user/number",
	 *     tags={"用户分析swagger"},
	 *     summary="获取用户数量swagger",
	 *     operationId="getUserNumber",
	 *     produces={"application/json"},
	 *     @SWG\Parameter(
	 *         name="start_time",
	 *         in="query",
	 *         description="开始时间",
	 *         required=true,
	 *         type="string",
	 *     ),
	 *     @SWG\Parameter(
	 *         name="end_time",
	 *         in="query",
	 *         description="结束时间",
	 *         required=true,
	 *         type="string",
	 *     ),
	 *     @SWG\Response(
	 *         response=200,
	 *         description="successful operation",
	 *         @SWG\Schema(
	 *             type="object",
	 *             allOf={
	 *                  @SWG\Items(
	 *                      @SWG\Property(
	 *                          type="integer",
	 *                          property="errorCode",
	 *                          description="错误码",
	 *                          example=200
	 *                      ),
	 *                      @SWG\Property(
	 *                          property="errorMsg",
	 *                          type="string",
	 *                          description="错误信息",
	 *                          example="成功"
	 *                      ),
	 *                      @SWG\Property(
	 *                          property="data",
	 *                          type="array",
	 *                          @SWG\Items(
	 *                              @SWG\Property(
	 *                                  type="string",
	 *                                  property="metric_name",
	 *                                  example="指标名称"
	 *                              ),
	 *                              @SWG\Property(
	 *                                  property="metric_value",
	 *                                  type="integer",
	 *                                  example=1
	 *                              )
	 *                          )
	 *                      )
	 *                  )
	 *              }
	 *         )
	 *     )
	 * )
	 */
	public function test()
	{
	
	}
}