# Widgets

APIs for managing Single Questions

## Display a listing of Simple Questions Widget

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/cms/v1/widgetSimpleQuestion" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/cms/v1/widgetSimpleQuestion"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "WidgetSimpleQuestions Index",
 "data": [
   {
     "id":1,
      "widget_type_id": 1,
     "questions": "{\"sets\": [{\"order\": 1, \"answers\": [{\"order\": 1, \"answer\": \"Answer 1. Text.\"}]}",
     "multi_answer": 0,
     "button_text": "Next",
     "settings_id": 1,
     "created_at": "2021-04-13T11:59:03.000000Z",
     "updated_at": "2021-04-13T11:59:03.000000Z"
     "widget_setting": {
         "id": 1,
         "header_img": null,
         "completion_time": 120,
         "reward_id": null,
         "created_at": "2021-04-13T11:59:03.000000Z",
         "updated_at": "2021-04-13T11:59:03.000000Z"
     }
   }
 ]
}
```
> Example response (204):

```json
<Empty response>
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent.",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-GETapi-cms-v1-widgetSimpleQuestion" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-cms-v1-widgetSimpleQuestion"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-cms-v1-widgetSimpleQuestion"></code></pre>
</div>
<div id="execution-error-GETapi-cms-v1-widgetSimpleQuestion" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-cms-v1-widgetSimpleQuestion"></code></pre>
</div>
<form id="form-GETapi-cms-v1-widgetSimpleQuestion" data-method="GET" data-path="api/cms/v1/widgetSimpleQuestion" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-cms-v1-widgetSimpleQuestion', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-cms-v1-widgetSimpleQuestion" onclick="tryItOut('GETapi-cms-v1-widgetSimpleQuestion');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-cms-v1-widgetSimpleQuestion" onclick="cancelTryOut('GETapi-cms-v1-widgetSimpleQuestion');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-cms-v1-widgetSimpleQuestion" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/cms/v1/widgetSimpleQuestion</code></b>
</p>
<p>
<label id="auth-GETapi-cms-v1-widgetSimpleQuestion" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-cms-v1-widgetSimpleQuestion" data-component="header"></label>
</p>
</form>


## Display the specified resource.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/cms/v1/widgetSimpleQuestion/vel" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/cms/v1/widgetSimpleQuestion/vel"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "Got specific Outro Card.",
 "data": {
     "id":1,
     "widget_type_id": 1,
     "questions": "{\"sets\": [{\"order\": 1, \"answers\": [{\"order\": 1, \"answer\": \"Answer 1. Text.\"}]}",
     "multi_answer": 0,
     "button_text": "Next",
     "settings_id": 1,
     "created_at": "2021-04-13T11:59:03.000000Z",
     "updated_at": "2021-04-13T11:59:03.000000Z"
     "widget_setting": {
         "id": 1,
         "header_img": null,
         "completion_time": 120,
         "reward_id": null,
         "created_at": "2021-04-13T11:59:03.000000Z",
         "updated_at": "2021-04-13T11:59:03.000000Z"
     }
  }
```
> Example response (404):

```json
{
    "success": false,
    "code": 460,
    "message": "Wrong ID.",
    "data": null
}
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent."
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-GETapi-cms-v1-widgetSimpleQuestion--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-cms-v1-widgetSimpleQuestion--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-cms-v1-widgetSimpleQuestion--id-"></code></pre>
</div>
<div id="execution-error-GETapi-cms-v1-widgetSimpleQuestion--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-cms-v1-widgetSimpleQuestion--id-"></code></pre>
</div>
<form id="form-GETapi-cms-v1-widgetSimpleQuestion--id-" data-method="GET" data-path="api/cms/v1/widgetSimpleQuestion/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-cms-v1-widgetSimpleQuestion--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-cms-v1-widgetSimpleQuestion--id-" onclick="tryItOut('GETapi-cms-v1-widgetSimpleQuestion--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-cms-v1-widgetSimpleQuestion--id-" onclick="cancelTryOut('GETapi-cms-v1-widgetSimpleQuestion--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-cms-v1-widgetSimpleQuestion--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/cms/v1/widgetSimpleQuestion/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-cms-v1-widgetSimpleQuestion--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-cms-v1-widgetSimpleQuestion--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-cms-v1-widgetSimpleQuestion--id-" data-component="url" required  hidden>
<br>
</p>
</form>


## Store a newly question

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://helix4.com/api/cms/v1/widgetSimpleQuestion" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"questions":"[\"repellat\",\"sunt\"]","multi_answer":"0","button_text":"sapiente"}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/cms/v1/widgetSimpleQuestion"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "questions": "[\"repellat\",\"sunt\"]",
    "multi_answer": "0",
    "button_text": "sapiente"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "Created New Company",
 "data": {
     "id":1,
     "widget_type_id": 1,
     "questions": "{\"sets\": [{\"order\": 1, \"answers\": [{\"order\": 1, \"answer\": \"Answer 1. Text.\"}]}",
     "multi_answer": 0,
     "button_text": "Next",
     "settings_id": 1,
     "created_at": "2021-04-13T11:59:03.000000Z",
     "updated_at": "2021-04-13T11:59:03.000000Z"
     "widget_setting": {
         "id": 1,
         "header_img": null,
         "completion_time": 120,
         "reward_id": null,
         "created_at": "2021-04-13T11:59:03.000000Z",
         "updated_at": "2021-04-13T11:59:03.000000Z"
     }
   }
```
> Example response (422):

```json

{
 "message":"The given data was invalid.",
}
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-POSTapi-cms-v1-widgetSimpleQuestion" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-cms-v1-widgetSimpleQuestion"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-cms-v1-widgetSimpleQuestion"></code></pre>
</div>
<div id="execution-error-POSTapi-cms-v1-widgetSimpleQuestion" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-cms-v1-widgetSimpleQuestion"></code></pre>
</div>
<form id="form-POSTapi-cms-v1-widgetSimpleQuestion" data-method="POST" data-path="api/cms/v1/widgetSimpleQuestion" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-cms-v1-widgetSimpleQuestion', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-cms-v1-widgetSimpleQuestion" onclick="tryItOut('POSTapi-cms-v1-widgetSimpleQuestion');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-cms-v1-widgetSimpleQuestion" onclick="cancelTryOut('POSTapi-cms-v1-widgetSimpleQuestion');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-cms-v1-widgetSimpleQuestion" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/cms/v1/widgetSimpleQuestion</code></b>
</p>
<p>
<label id="auth-POSTapi-cms-v1-widgetSimpleQuestion" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-cms-v1-widgetSimpleQuestion" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>questions</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="questions" data-endpoint="POSTapi-cms-v1-widgetSimpleQuestion" data-component="body"  hidden>
<br>
The value must be a valid JSON string.</p>
<p>
<b><code>multi_answer</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="multi_answer" data-endpoint="POSTapi-cms-v1-widgetSimpleQuestion" data-component="body" required  hidden>
<br>
The value must be one of <code>0</code> or <code>1</code>.</p>
<p>
<b><code>button_text</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="button_text" data-endpoint="POSTapi-cms-v1-widgetSimpleQuestion" data-component="body" required  hidden>
<br>
</p>

</form>


## api/cms/v1/widgetSimpleQuestion/{id}




> Example request:

```bash
curl -X PUT \
    "http://helix4.com/api/cms/v1/widgetSimpleQuestion/aliquid" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"questions":"[\"quia\",\"est\"]","multi_answer":"1","button_text":"et"}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/cms/v1/widgetSimpleQuestion/aliquid"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "questions": "[\"quia\",\"est\"]",
    "multi_answer": "1",
    "button_text": "et"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-cms-v1-widgetSimpleQuestion--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-cms-v1-widgetSimpleQuestion--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-cms-v1-widgetSimpleQuestion--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-cms-v1-widgetSimpleQuestion--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-cms-v1-widgetSimpleQuestion--id-"></code></pre>
</div>
<form id="form-PUTapi-cms-v1-widgetSimpleQuestion--id-" data-method="PUT" data-path="api/cms/v1/widgetSimpleQuestion/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-cms-v1-widgetSimpleQuestion--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-cms-v1-widgetSimpleQuestion--id-" onclick="tryItOut('PUTapi-cms-v1-widgetSimpleQuestion--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-cms-v1-widgetSimpleQuestion--id-" onclick="cancelTryOut('PUTapi-cms-v1-widgetSimpleQuestion--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-cms-v1-widgetSimpleQuestion--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/cms/v1/widgetSimpleQuestion/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-cms-v1-widgetSimpleQuestion--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>questions</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="questions" data-endpoint="PUTapi-cms-v1-widgetSimpleQuestion--id-" data-component="body"  hidden>
<br>
The value must be a valid JSON string.</p>
<p>
<b><code>multi_answer</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="multi_answer" data-endpoint="PUTapi-cms-v1-widgetSimpleQuestion--id-" data-component="body" required  hidden>
<br>
The value must be one of <code>0</code> or <code>1</code>.</p>
<p>
<b><code>button_text</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="button_text" data-endpoint="PUTapi-cms-v1-widgetSimpleQuestion--id-" data-component="body" required  hidden>
<br>
</p>

</form>


## Remove the specified resource

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://helix4.com/api/cms/v1/widgetSimpleQuestion/delectus?id=16" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/cms/v1/widgetSimpleQuestion/delectus"
);

let params = {
    "id": "16",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "Deleted The Question.",
 "data": null
}

* @response   404 {
 "success": false,
 "code": 460,
 "message": "Wrong ID.",
 "data": null
}
```
> Example response (403):

```json

{
 "success": false,
 "code": 403,
 "message": "Permission is absent.",
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-DELETEapi-cms-v1-widgetSimpleQuestion--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-cms-v1-widgetSimpleQuestion--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-cms-v1-widgetSimpleQuestion--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-cms-v1-widgetSimpleQuestion--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-cms-v1-widgetSimpleQuestion--id-"></code></pre>
</div>
<form id="form-DELETEapi-cms-v1-widgetSimpleQuestion--id-" data-method="DELETE" data-path="api/cms/v1/widgetSimpleQuestion/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-cms-v1-widgetSimpleQuestion--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-cms-v1-widgetSimpleQuestion--id-" onclick="tryItOut('DELETEapi-cms-v1-widgetSimpleQuestion--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-cms-v1-widgetSimpleQuestion--id-" onclick="cancelTryOut('DELETEapi-cms-v1-widgetSimpleQuestion--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-cms-v1-widgetSimpleQuestion--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/cms/v1/widgetSimpleQuestion/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-cms-v1-widgetSimpleQuestion--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-cms-v1-widgetSimpleQuestion--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-cms-v1-widgetSimpleQuestion--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="DELETEapi-cms-v1-widgetSimpleQuestion--id-" data-component="query"  hidden>
<br>
Brand Primary Colour ID</p>
</form>


## Display a listing of Free Text Questions Widget

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/cms/v1/widgetFreeTextQuestion" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/cms/v1/widgetFreeTextQuestion"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "WidgetSimpleQuestions Index",
 "data": [
   {
     "id":1,
     "widget_type_id": 1,
     "questions": "{\"sets\": [{\"order\": 1, \"question\": \"Question 1. Text.\"}]}",
     "character_limit": 50,
     "button_text": "Next",
     "settings_id": 1,
     "created_at": "2021-04-13T11:59:03.000000Z",
     "updated_at": "2021-04-13T11:59:03.000000Z"
     "widget_setting": {
         "id": 1,
         "header_img": null,
         "completion_time": 120,
         "reward_id": null,
         "created_at": "2021-04-13T11:59:03.000000Z",
         "updated_at": "2021-04-13T11:59:03.000000Z"
     }
   }
 ]
}
```
> Example response (204):

```json
<Empty response>
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent.",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-GETapi-cms-v1-widgetFreeTextQuestion" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-cms-v1-widgetFreeTextQuestion"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-cms-v1-widgetFreeTextQuestion"></code></pre>
</div>
<div id="execution-error-GETapi-cms-v1-widgetFreeTextQuestion" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-cms-v1-widgetFreeTextQuestion"></code></pre>
</div>
<form id="form-GETapi-cms-v1-widgetFreeTextQuestion" data-method="GET" data-path="api/cms/v1/widgetFreeTextQuestion" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-cms-v1-widgetFreeTextQuestion', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-cms-v1-widgetFreeTextQuestion" onclick="tryItOut('GETapi-cms-v1-widgetFreeTextQuestion');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-cms-v1-widgetFreeTextQuestion" onclick="cancelTryOut('GETapi-cms-v1-widgetFreeTextQuestion');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-cms-v1-widgetFreeTextQuestion" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/cms/v1/widgetFreeTextQuestion</code></b>
</p>
<p>
<label id="auth-GETapi-cms-v1-widgetFreeTextQuestion" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-cms-v1-widgetFreeTextQuestion" data-component="header"></label>
</p>
</form>


## Display the specified resource.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/cms/v1/widgetFreeTextQuestion/repellat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/cms/v1/widgetFreeTextQuestion/repellat"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "Got specific Free Text Question",
 "data": {
     "id":1,
     "widget_type_id": 1,
     "questions": "{\"sets\": [{\"order\": 1, \"question\": \"Question 1. Text.\"}]}",
     "character_limit": 50,
     "button_text": "Next",
     "settings_id": 1,
     "created_at": "2021-04-13T11:59:03.000000Z",
     "updated_at": "2021-04-13T11:59:03.000000Z"
     "widget_setting": {
         "id": 1,
         "header_img": null,
         "completion_time": 120,
         "reward_id": null,
         "created_at": "2021-04-13T11:59:03.000000Z",
         "updated_at": "2021-04-13T11:59:03.000000Z"
     }
  }
```
> Example response (404):

```json
{
    "success": false,
    "code": 404,
    "message": "Wrong ID.",
    "data": null
}
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent."
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-GETapi-cms-v1-widgetFreeTextQuestion--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-cms-v1-widgetFreeTextQuestion--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-cms-v1-widgetFreeTextQuestion--id-"></code></pre>
</div>
<div id="execution-error-GETapi-cms-v1-widgetFreeTextQuestion--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-cms-v1-widgetFreeTextQuestion--id-"></code></pre>
</div>
<form id="form-GETapi-cms-v1-widgetFreeTextQuestion--id-" data-method="GET" data-path="api/cms/v1/widgetFreeTextQuestion/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-cms-v1-widgetFreeTextQuestion--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-cms-v1-widgetFreeTextQuestion--id-" onclick="tryItOut('GETapi-cms-v1-widgetFreeTextQuestion--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-cms-v1-widgetFreeTextQuestion--id-" onclick="cancelTryOut('GETapi-cms-v1-widgetFreeTextQuestion--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-cms-v1-widgetFreeTextQuestion--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/cms/v1/widgetFreeTextQuestion/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-cms-v1-widgetFreeTextQuestion--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-cms-v1-widgetFreeTextQuestion--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-cms-v1-widgetFreeTextQuestion--id-" data-component="url" required  hidden>
<br>
</p>
</form>


## Store a newly Free Text Question

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://helix4.com/api/cms/v1/widgetFreeTextQuestion" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"questions":"[\"voluptatum\",\"aut\"]","character_limit":5,"button_text":"eaque"}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/cms/v1/widgetFreeTextQuestion"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "questions": "[\"voluptatum\",\"aut\"]",
    "character_limit": 5,
    "button_text": "eaque"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "Created New Question",
 "data": {
     "id":1,
     "widget_type_id": 1,
     "questions": "{\"sets\": [{\"order\": 1, \"question\": \"Question 1. Text.\"}]}",
     "character_limit": 50,
     "button_text": "Next",
     "settings_id": 1,
     "created_at": "2021-04-13T11:59:03.000000Z",
     "updated_at": "2021-04-13T11:59:03.000000Z"
     "widget_setting": {
         "id": 1,
         "header_img": null,
         "completion_time": 120,
         "reward_id": null,
         "created_at": "2021-04-13T11:59:03.000000Z",
         "updated_at": "2021-04-13T11:59:03.000000Z"
     }
   }
```
> Example response (422):

```json

{
 "message":"The given data was invalid.",
}
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-POSTapi-cms-v1-widgetFreeTextQuestion" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-cms-v1-widgetFreeTextQuestion"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-cms-v1-widgetFreeTextQuestion"></code></pre>
</div>
<div id="execution-error-POSTapi-cms-v1-widgetFreeTextQuestion" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-cms-v1-widgetFreeTextQuestion"></code></pre>
</div>
<form id="form-POSTapi-cms-v1-widgetFreeTextQuestion" data-method="POST" data-path="api/cms/v1/widgetFreeTextQuestion" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-cms-v1-widgetFreeTextQuestion', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-cms-v1-widgetFreeTextQuestion" onclick="tryItOut('POSTapi-cms-v1-widgetFreeTextQuestion');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-cms-v1-widgetFreeTextQuestion" onclick="cancelTryOut('POSTapi-cms-v1-widgetFreeTextQuestion');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-cms-v1-widgetFreeTextQuestion" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/cms/v1/widgetFreeTextQuestion</code></b>
</p>
<p>
<label id="auth-POSTapi-cms-v1-widgetFreeTextQuestion" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-cms-v1-widgetFreeTextQuestion" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>questions</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="questions" data-endpoint="POSTapi-cms-v1-widgetFreeTextQuestion" data-component="body" required  hidden>
<br>
The value must be a valid JSON string.</p>
<p>
<b><code>character_limit</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="character_limit" data-endpoint="POSTapi-cms-v1-widgetFreeTextQuestion" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>button_text</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="button_text" data-endpoint="POSTapi-cms-v1-widgetFreeTextQuestion" data-component="body" required  hidden>
<br>
</p>

</form>


## Update the specified resource in storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://helix4.com/api/cms/v1/widgetFreeTextQuestion/debitis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"questions":"[\"enim\",\"omnis\"]","character_limit":3,"button_text":"neque"}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/cms/v1/widgetFreeTextQuestion/debitis"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "questions": "[\"enim\",\"omnis\"]",
    "character_limit": 3,
    "button_text": "neque"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "Updated The Question.",
 "data": {
     "id":1,
     "widget_type_id": 1,
     "questions": "{\"sets\": [{\"order\": 1, \"question\": \"Question 1. Text.\"}]}",
     "character_limit": 50,
     "button_text": "Next",
     "settings_id": 1,
     "created_at": "2021-04-13T11:59:03.000000Z",
     "updated_at": "2021-04-13T11:59:03.000000Z"
     "widget_setting": {
         "id": 1,
         "header_img": null,
         "completion_time": 120,
         "reward_id": null,
         "created_at": "2021-04-13T11:59:03.000000Z",
         "updated_at": "2021-04-13T11:59:03.000000Z"
     }
  }
}
```
> Example response (422):

```json

{
 "message":"The given data was invalid."
}

* @response   404 {
 "success": false,
 "code": 404,
 "message": "Wrong ID.",
 "data": null
}
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent.",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-PUTapi-cms-v1-widgetFreeTextQuestion--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-cms-v1-widgetFreeTextQuestion--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-cms-v1-widgetFreeTextQuestion--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-cms-v1-widgetFreeTextQuestion--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-cms-v1-widgetFreeTextQuestion--id-"></code></pre>
</div>
<form id="form-PUTapi-cms-v1-widgetFreeTextQuestion--id-" data-method="PUT" data-path="api/cms/v1/widgetFreeTextQuestion/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-cms-v1-widgetFreeTextQuestion--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-cms-v1-widgetFreeTextQuestion--id-" onclick="tryItOut('PUTapi-cms-v1-widgetFreeTextQuestion--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-cms-v1-widgetFreeTextQuestion--id-" onclick="cancelTryOut('PUTapi-cms-v1-widgetFreeTextQuestion--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-cms-v1-widgetFreeTextQuestion--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/cms/v1/widgetFreeTextQuestion/{id}</code></b>
</p>
<p>
<label id="auth-PUTapi-cms-v1-widgetFreeTextQuestion--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-cms-v1-widgetFreeTextQuestion--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-cms-v1-widgetFreeTextQuestion--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>questions</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="questions" data-endpoint="PUTapi-cms-v1-widgetFreeTextQuestion--id-" data-component="body" required  hidden>
<br>
The value must be a valid JSON string.</p>
<p>
<b><code>character_limit</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="character_limit" data-endpoint="PUTapi-cms-v1-widgetFreeTextQuestion--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>button_text</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="button_text" data-endpoint="PUTapi-cms-v1-widgetFreeTextQuestion--id-" data-component="body" required  hidden>
<br>
</p>

</form>


## Remove the specified resource

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://helix4.com/api/cms/v1/widgetFreeTextQuestion/nihil" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/cms/v1/widgetFreeTextQuestion/nihil"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "Deleted The Question.",
 "data": null
}

* @response   404 {
 "success": false,
 "code": 404,
 "message": "Wrong ID.",
 "data": null
}
```
> Example response (403):

```json

{
 "success": false,
 "code": 403,
 "message": "Permission is absent.",
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-DELETEapi-cms-v1-widgetFreeTextQuestion--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-cms-v1-widgetFreeTextQuestion--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-cms-v1-widgetFreeTextQuestion--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-cms-v1-widgetFreeTextQuestion--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-cms-v1-widgetFreeTextQuestion--id-"></code></pre>
</div>
<form id="form-DELETEapi-cms-v1-widgetFreeTextQuestion--id-" data-method="DELETE" data-path="api/cms/v1/widgetFreeTextQuestion/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-cms-v1-widgetFreeTextQuestion--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-cms-v1-widgetFreeTextQuestion--id-" onclick="tryItOut('DELETEapi-cms-v1-widgetFreeTextQuestion--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-cms-v1-widgetFreeTextQuestion--id-" onclick="cancelTryOut('DELETEapi-cms-v1-widgetFreeTextQuestion--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-cms-v1-widgetFreeTextQuestion--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/cms/v1/widgetFreeTextQuestion/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-cms-v1-widgetFreeTextQuestion--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-cms-v1-widgetFreeTextQuestion--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-cms-v1-widgetFreeTextQuestion--id-" data-component="url" required  hidden>
<br>
</p>
</form>



