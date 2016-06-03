<table cellpadding="0" cellspacing="0" border="0" width="574">
    <tbody>
    <tr>
        <td>
            <img class="CToWUd"
                 src="http://d2gz97q9ohxpw.cloudfront.net/LibroReclamaciones/Content/img/cabecera_visa.jpg"
                 alt="Grupo El Comercio">
        </td>
    </tr>
    <tr>
        <td style="padding-top:10px;font-weight:bold;padding-right:6px">
            <div style="float:left">{% now "DATE_FORMAT" %}</div>
            <div style="float:right">Número de Reclamo:&nbsp;&nbsp;&nbsp;{{$codigo_reclamo}}</div>
        </td>
    </tr>
    <tr>
        <td>
            {% if data.tipo == "persona" %}
            <h2 style="font-family:georgia">SR(a): {{$name}}</h2>
            {% else %}
            <h2 style="font-family:georgia">Estimado(a):</h2>
            {% endif %}
            <p>Saludándolo(a) cordialmente le hacemos llegar la constancia del registro de su reclamo en el libro
                de reclamaciones del Grupo El Comercio</p>
        </td>
    </tr>


    <tr>
        <td>
            <table cellpadding="0" cellspacing="0" border="0" width="542">
                <tbody>
                <tr>
                    <td align="right" width="371"><h3>Número de Reclamo :&nbsp;&nbsp;&nbsp;</h3></td>
                    <td width="371">
                        <h3> {{$codigo_reclamo}}</h3>
                    </td>
                </tr>
                <tr>
                    <td align="right"><h3>Portal del Reclamo :&nbsp;&nbsp;&nbsp;</h3></td>
                    <td width="371">
                        <h3><a href="http://elcomercio.pe" target="_blank">elcomercio.pe</a></h3>
                    </td>
                </tr>
                <tr>
                    <td align="right"><h3>Tipo de Reclamo o Queja:&nbsp;&nbsp;&nbsp;</h3></td>
                    <td width="371">
                        <h3>{{$tipo_disconformidad}}</h3>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        Si desea ver el estado de su reclamo, haga clic <a
                                href="http://{{  url("user/profile?cd=$codigo_reclamo") }}" style="color:#069"
                                target="_blank">aquí</a><br><br>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>

    </tbody>
</table>